<?php
require_once 'conexao.php';


$nome = filter_input(INPUT_POST,"nome",
            FILTER_SANITIZE_SPECIAL_CHARS);
$nome = mysqli_real_escape_string($banco,$nome);

$cpf = filter_input(INPUT_POST,"cpf",
            FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = mysqli_real_escape_string($banco,$cpf);

$telefone = filter_input(INPUT_POST,"telefone",
            FILTER_SANITIZE_SPECIAL_CHARS);
$telefone = mysqli_real_escape_string($banco,$telefone);

$usuario = filter_input(INPUT_POST,"login",
            FILTER_SANITIZE_SPECIAL_CHARS);
$usuario = mysqli_real_escape_string($banco,$usuario);


$senha = filter_input(INPUT_POST,"senha",
            FILTER_SANITIZE_SPECIAL_CHARS);
/*$senha = mysqli_real_escape_string($banco,$senha);*/
$senha = password_hash($senha,PASSWORD_DEFAULT);


$sql = "INSERT INTO Paciente (Usuario,Password,CPF,Telefone,Nome) 
        VALUES ('$usuario','$senha','$cpf','$telefone','$nome')";
mysqli_query($banco,$sql);

header("location: login.php");


