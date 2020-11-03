<?php require_once "restrito.php" ?>
<?php require_once "restrito_pac.php" ?>
<?php require_once "main.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marcar Consulta</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
     <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">


</head>
<body>
<br><br><br><br>
<center>
<div class="container-fluid">

    <form enctype="multipart/form-data"
	action="consulta_proc.php" method="post">
	<div class="form-group">
	  <?php
            require_once "conexao.php";
            $id = $_SESSION['id'];
            $sql = "SELECT idpaciente FROM paciente
                    WHERE idpaciente = $id LIMIT 1";
            $resultado = mysqli_query($banco,$sql);
            $usuario = mysqli_fetch_assoc($resultado);
			$q = $_GET['q'];
			if ($q!= ""){echo "<script>alert('Data Indisponvel')</script>"  ;}




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
        value="<?= $usuario['idpaciente'] ?>"
        name="id">


        <button type="submit">Marcar</button>
		</div>
    </form>
</div>
</center>
</body>
</html>
