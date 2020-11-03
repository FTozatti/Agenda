<?php require_once "main.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
	 <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
    <br><br><br><br>
	<center>
	<div class="container-fluid">
    <form action="login_proc.php" method="post">
        <label for="login">Login</label><br>
        <input type="text" id="login" name="login"><br>
        <label for="senha">Senha</label><br>
        <input type="password" name="senha" id="senha"><br>
        <button type="submit">Login</button>
    </form>
	 <a href="inserir.php">Cadastre-se aqui</a>
	</div>
	</center>
</body>
</html>
