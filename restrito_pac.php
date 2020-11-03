<?php
session_start();

$tipo = $_SESSION['tipo'];
if ($tipo !== 'p') {

    header('location: Negado.php');

}
