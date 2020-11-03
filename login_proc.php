<?php
// Iniciar a $_SESSION
session_start();

require_once "conexao.php";

$usuario = filter_input(INPUT_POST
            ,'login',FILTER_SANITIZE_SPECIAL_CHARS);

$senha = filter_input(INPUT_POST,'senha',
                FILTER_SANITIZE_SPECIAL_CHARS);


$sql = "SELECT IDPaciente,Usuario,Password FROM Paciente
        WHERE Usuario = '$usuario'";
$resultado = mysqli_query($banco,$sql);
$registro = mysqli_fetch_assoc($resultado);

if(password_verify($senha,$registro['Password'])){

    $_SESSION['id'] = $registro['IDPaciente'];
	$_SESSION['tipo'] = "p";
    header("location: index_paciente.php");

} else {

    $sql = "SELECT IDMedico,Usuario,Password FROM Medico
            WHERE Usuario = '$usuario'";
    $resultado = mysqli_query($banco,$sql);
    $registro = mysqli_fetch_assoc($resultado);

	if (password_verify($senha,$registro['Password'])){

    $_SESSION['id'] = $registro['IDMedico'];
	$_SESSION['tipo'] = "m";
    header("location: index_medico.php");

    }else {

	echo "Usuario ou Senha Incorreto!";
    }
}
