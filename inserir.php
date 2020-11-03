<?php require_once "main.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir usuário</title>
	<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
<br><br><br><br>
<center>
<div class = "container-fluid"
<div class = "col-md-4">
</div>
<div class = "col-md-4">
    <form enctype="multipart/form-data"
	action="inserir_proc.php" method="post">
	<div class="form-group">

	    <label for="nome">Nome</label><br>
        <input class="form-control" type="text" id="nome" name="nome"><br>

		<label for="cpf">CPF</label><br>
        <input class="form-control" type="text" id="cpf" name="cpf"><br>

		<label for="telefone">Telefone</label><br>
        <input class="form-control" type="text" id="telefone" name="telefone"><br>

        <label for="login">Login</label><br>
        <input class="form-control" type="text" id="login" name="login"><br>

        <label for="senha">Senha</label><br>
        <input class="form-control" type="password" name="senha" id="senha"><br>

        <button type="submit">Salvar</button>
		</div>
    </form>
	</div>
	<div class = "col-md-4">
	</div>
	</div>
	</center>
</body>
</html>
