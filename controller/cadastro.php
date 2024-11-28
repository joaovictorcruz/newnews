<?php

    #Base de dados
    include('../db/conexao.php');


    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    $statusUser = $mysqli->real_escape_string($_POST['statusUser']);

    $sql_code = "INSERT INTO usuarios (nome,email, senha, statusUser) VALUES ('$nome','$email','$senha', '$statusUser')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    header("Location: ../index.php?pagina=login");



