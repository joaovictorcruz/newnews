<?php

$usuario = 'root';
$senha = '';
$database = 'newNews';
$host = 'localhost:3306';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}