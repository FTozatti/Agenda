<?php require_once "restrito.php" ?>
<?php require_once "restrito_med.php" ?>
<?php require_once "main.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir médico</title>
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
	  action="inserirmed_proc.php" method="post">
	  <div class="form-group">

	    <label for="nome">Nome</label><br>
        <input class="form-control" type="text" id="nome" name="nome"><br>

		<label for="crm">CRM</label><br>
        <input class="form-control" type="text" id="crm" name="crm"><br>

		<label for="cpf">CPF</label><br>
        <input class="form-control" type="text" id="cpf" name="cpf"><br>

		<label for="salario">Salario</label><br>
        <input class="form-control" type="text" id="salario" name="salario"><br>

		<label for="area">Area</label><br>
		<select class="form-control" name="area" id="area">
           <option value="1" selected>Ortopedia Geral</option>
           <option value="2">Cirurgia de Coluna</option>
           <option value="3">Cirurgia de Mão</option>
		   <option value="4">Cirurgia de Joelho</option>
		   <option value="5">Cirurgia de Pés</option>
        </select><br>


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
