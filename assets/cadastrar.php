<?php
include 'conexao.php';


$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query = 'insert into usuario (nome, usr, senha) values ('$nome', '$usuario', '$senha')';
$conexao->query($query);

if($conexao->query($query) == true){
    $_SESSION['CADASTRO_EFETUADO'] = TRUE;
}

header('Location: ../index.php');
$conexao->close();