<?php require_once "main.php" ?>
<?php require_once "restrito_pac.php" ?>
<?php require_once "restrito.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reagendar Consulta</title>
	<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
<br><br><br><br>
<center>
<div class="container-fluid">

    <form enctype="multipart/form-data"
	action="editar_proc.php" method="post">
	<div class="form-group">
	  <?php
            require_once "conexao.php";
            $id = intval($_GET['id']);
            $sql = "SELECT idconsulta,Medico,data FROM consulta
                    WHERE idconsulta = $id LIMIT 1";
            $resultado = mysqli_query($banco,$sql);
            $consulta = mysqli_fetch_assoc($resultado);
        ?>

	    <label for="medico">Médico</label><br>
		<select class="form-control" name="medico" id="medico">
           <option value="10" selected>Evellyn</option>
           <option value="11">Guilherme</option>
           <option value="12">Wilson</option>
        </select><br>

		<label for="data">Data</label><br>
        <input class="form-control" type="DateTime-Local" id="data" name="data"><br>

		<input type="hidden"
        value="<?= $consulta['idconsulta'] ?>"
        name="id">


        <button type="submit">Marcar</button>
		</div>
    </form>
</div>
</center>
</body>
</html>
