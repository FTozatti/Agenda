<?php
session_start();

$tipo = $_SESSION['tipo'];
if(!isset($_SESSION['tipo'])){
    header('location: login.php');
}
