<?php
# Substitua abaixo os dados, de acordo com o banco criado
$user = "root"; 
$password = ""; 
$database = "login"; 
$hostname = "localhost"; 

# Conecta com o servidor de banco de dados 
$conexao = mysqli_connect( $hostname, $user, $password, $database ) or die( 'Erro na conexão'); 