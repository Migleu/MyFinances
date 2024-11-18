<?php
$host = 'localhost'; #127.0.0.1
$finance = 'root';
$senha = '';
$banco = 'myfinances';

$conn = mysqli_connect($host, $finance, $senha, $banco) or die('Não foi possível conectar');
?>