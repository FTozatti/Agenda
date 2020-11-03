<?php
require_once 'conexao.php';


$nome = filter_input(INPUT_POST,"nome",
            FILTER_SANITIZE_SPECIAL_CHARS);
$nome = mysqli_real_escape_string($banco,$nome);

$crm = filter_input(INPUT_POST,"crm",
            FILTER_SANITIZE_SPECIAL_CHARS);
$crm = mysqli_real_escape_string($banco,$crm);

$cpf = filter_input(INPUT_POST,"cpf",
            FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = mysqli_real_escape_string($banco,$cpf);

$salario = filter_input(INPUT_POST,"salario",
            FILTER_SANITIZE_SPECIAL_CHARS);
$salario = mysqli_real_escape_string($banco,$salario);

$area = filter_input(INPUT_POST,"area",
            FILTER_SANITIZE_SPECIAL_CHARS);
$area = mysqli_real_escape_string($banco,$area);

$usuario = filter_input(INPUT_POST,"login",
            FILTER_SANITIZE_SPECIAL_CHARS);
$usuario = mysqli_real_escape_string($banco,$usuario);


$senha = filter_input(INPUT_POST,"senha",
            FILTER_SANITIZE_SPECIAL_CHARS);
/*$senha = mysqli_real_escape_string($banco,$senha);*/
$senha = password_hash($senha,PASSWORD_DEFAULT);


$sql = "INSERT INTO Medico (Usuario,Password,CPF,CRM,Salario,Area,Nome) 
        VALUES ('$usuario','$senha','$cpf','$crm','$salario','$area','$nome')";
mysqli_query($banco,$sql);

header("location: login.php");


