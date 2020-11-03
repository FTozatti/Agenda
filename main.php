<?php

$tipo = $_SESSION['tipo'];
if(!isset($_SESSION['tipo'])){
    require_once "menu3.php";
}
elseif ($tipo == 'm') {
     require_once "menu2.php";
}
else {
  require_once "menu.php";
}
