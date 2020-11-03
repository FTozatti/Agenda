<?php require_once "restrito.php" ?>
<?php require_once "restrito_med.php" ?>
<?php require_once "main.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dados Paciente</title>
	<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
<br><br><br><br>
	<div class = "container-fluid">
    <?php
	 require_once "conexao.php";
            $id = intval($_GET['id']);
            $sql = "SELECT Exames FROM paciente
                    WHERE idpaciente = $id LIMIT 1";
            $resultado = mysqli_query($banco,$sql);
            $usuario = mysqli_fetch_assoc($resultado);
	?>


    <form enctype="multipart/form-data"
	action="dados_proc.php" method="post">
	<div class="form-group">

	    <label for="pront">Prontuario</label><br>
        <input class = "form-control-file" type="file" id="pront" name="pront"><br>

	   <input type="hidden"
        value="<?= $id ?>"
        name="id">

        <button type="submit">Salvar</button>
		</div>
    </form>
	<a href="/projeto/pront/<?= $usuario['Exames'] ?>" download>
     Baixar
     </a>
	</div>
</body>
</html>
