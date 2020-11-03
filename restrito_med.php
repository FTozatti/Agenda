<?php
session_start();

$tipo = $_SESSION['tipo'];
if ($tipo !== 'm') {
    header('location: Negado.php');

}
