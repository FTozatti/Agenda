<?php
require_once 'conexao.php';

$id = intval($_GET['id']);


$sql = "DELETE FROM consulta WHERE idconsulta = $id";
mysqli_query($banco,$sql);

header("location: index_paciente.php");