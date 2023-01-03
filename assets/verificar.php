<?php
include 'conexao.php';
$usuario = $_POST['usuario'];
$senha = md5($_POST['password']);
$query = "select count(*) as total from usuario where user = '$usuario'";
$querylogin = "select count(*) as senhacorreta from usuario where user = '$usuario' and senha='$senha'";

$result = $conexao->query($query);
$row = mysqli_fetch_assoc($result);

$resultlogin = $conexao->query($querylogin);
$rowlogin = mysqli_fetch_assoc($resultlogin);

var_dump($rowlogin);
//caso o usuário não exista
if ($row['total'] == 0) {
    header('Location: ../cadastro.php');
    exit();
} else if($rowlogin['senhacorreta'] == 2){
    $_SESSION['LOGIN_EFETUADO'] = true;
    header('Location: ../page.php');
    exit();
} else if ($row['total'] != 1 and $rowlogin['senhacorreta'] != 2){
    $_SESSION['verifique'] = true;
    header('Location: ../index.php');
    exit();
    //Fornece no index a mensagem que propoem ao usuário para verificar seus dados
} else {
    header('Location: ../cadastro.php');
}



?>