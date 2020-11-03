<?php require_once "restrito.php" ?>
<?php require_once "restrito_med.php" ?>
<?php require_once "main.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
   <br><br><br>
   <div class = "container-fluid">

    <hr>
    <table class = "table">
	  <thead class="thead-light">
        <tr>
		    <th scope="col">Código Consulta</th>
            <th scope="col">Paciente</th>
            <th scope="col">Data</th>
            <th scope="col">Opções</th>
         </tr>
	   </thead>
	   <tbody>
        <?php

			$id = $_SESSION['id'];
            require_once 'conexao.php';
            $sql = "SELECT c.IDConsulta, p.Nome, DATE_FORMAT(c.data, '%d/%m/%Y %H:%i') as data, c.medico, c.paciente FROM consulta c
			        INNER JOIN Paciente p on p.IDPaciente = c.Paciente
			        Where C.medico = $id and c.data >= now() Order by c.data ";
            $resultado = mysqli_query($banco,$sql);

            if($resultado->num_rows > 0):
                while($medico = $resultado->fetch_assoc()):
        ?>
        <tr>
            <th scope="row"><?php echo $medico['IDConsulta']; ?></th>
            <td><?= $medico['Nome'] ?></td>
			<td><?= $medico['data'] ?></td>
            <td>
                <a href="/projeto/Dados.php?id=<?= $medico['paciente'] ?>">
                    Dados
                </a>

            </td>
        </tr>
        <?php
                endwhile;
            endif;
        ?>
	 </tbody>
    </table>
	</div>
</body>
</html>
