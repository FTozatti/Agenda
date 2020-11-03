<?php
require_once 'conexao.php';


$destino = "pront/".$_FILES['pront']['name'];
move_uploaded_file($_FILES['pront']['tmp_name'],$destino);
$pront = $_FILES['pront']['name'];
$nome = $_FILES['pront']['type'];
$id = intval($_POST['id']);

$sql = "Update paciente set Exames = '$pront'
		where IDPaciente = $id ";
mysqli_query($banco,$sql);


header("location: index_medico.php");