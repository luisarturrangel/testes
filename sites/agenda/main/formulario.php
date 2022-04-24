<?php

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$marcar = $_POST['marcar'];

$mysqli = new mysqli($nome, $descricao, $marcar);

if($mysqli->connect_errno)
    echo "Falha na conexão: (" .$mysqli->connect_errno.") ".$mysqli->connect_error;

?>
