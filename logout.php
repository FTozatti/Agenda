<?php
// inicia o $_SESSION
session_start();
// apaga os dados do usuário
session_destroy();

// devolve para o login
header('location: index.php');