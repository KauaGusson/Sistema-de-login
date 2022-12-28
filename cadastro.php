<?php
include 'assets/conexao.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pagin</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="img/logo.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="assets/cadastrar.php" method="POST">
                <input type="text" id="nome" class="fadeIn second" name="nome" placeholder="Nome" required>
                <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Usuário" required>
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="Senha" required>
                <input type="submit" class="fadeIn fourth" value="Cadastrar-se">
            </form>

        </div>
    </div>
</body>

</html>