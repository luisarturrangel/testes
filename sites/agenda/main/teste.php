<?php

$host = "localhost";
$usuario = "root";
$senha = "password";
$bd = "agenda";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
    echo "Falha na conexão: (" .$mysqli->connect_errno.") ".$mysqli->connect_error;

?>
