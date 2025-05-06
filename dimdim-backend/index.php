<?php

$mysqli = new mysqli("dimdim-mysql", "dimuser", "dimpass", "dimdimdb");

if ($mysqli -> connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}

echo "Conectado com sucesso ao Banco DimDim!";

?>
