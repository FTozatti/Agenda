<?php
require_once 'conexao.php';


$paciente = intval($_POST['id']);

$medico = filter_input(INPUT_POST,"medico",
            FILTER_SANITIZE_SPECIAL_CHARS);
$medico = mysqli_real_escape_string($banco,$medico);

$data = filter_input(INPUT_POST,"data",
            FILTER_SANITIZE_SPECIAL_CHARS);
$data = mysqli_real_escape_string($banco,$data);

$sql = "SELECT Medico, Data from Consulta where medico = $medico and data = $data";
$resultado = mysqli_query($banco,$sql);

if ($resultado->num_rows == 0) {
	$sql = "INSERT INTO Consulta (Medico, Data, Paciente) 
        VALUES ('$medico','$data','$paciente')";
    mysqli_query($banco,$sql);

    header("location: index_paciente.php");
}else {
	header("location: consulta.php/q=5");
}
/*
$sql = "INSERT INTO Consulta (Medico, Data, Paciente) 
        VALUES ('$medico','$data','$paciente')";
    mysqli_query($banco,$sql);

    header("location: index_paciente.php");
*/






