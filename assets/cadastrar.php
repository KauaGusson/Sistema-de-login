<?php
include 'conexao.php';
session_start();

$name = mysqli_real_escape_string($conexao, $_POST['nome']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);
$criptografar = md5($senha);
$query = "insert into usuario (nome, user, senha) values ('$name', '$usuario', '$criptografar')";
$conexao->query($query);

if($conexao->query($query) == true){
    $_SESSION['CADASTRO_EFETUADO'] = TRUE;
    $_SESSION['nome'] = $name;
}

header('Location: ../page.php');
$conexao->close();
?>