<?php
include 'conexao.php';
$usuario = $_POST['usuario'];
$query = "select count(*) as total from usuario where user = '$usuario'";
$result = $conexao->query($query);
$row = mysqli_fetch_assoc($result);
var_dump($row);


if ($row['total'] == 0) {
    $_SESSION['success'] = true;
    header('Location: ../cadastro.php');
} 



?>