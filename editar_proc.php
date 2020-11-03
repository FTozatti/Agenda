<?php
require_once 'conexao.php';

$medico = filter_input(INPUT_POST,"medico",
            FILTER_SANITIZE_SPECIAL_CHARS);
$medico = mysqli_real_escape_string($banco,$medico);

$data = filter_input(INPUT_POST,"data",
            FILTER_SANITIZE_SPECIAL_CHARS);
// Hash
$data = mysqli_real_escape_string($banco,$data);


$id = intval($_POST['id']);


	$sql = "UPDATE consulta SET medico = '$medico',
        data = '$data' WHERE idconsulta = $id";



mysqli_query($banco,$sql);




header("location: index_paciente.php");
