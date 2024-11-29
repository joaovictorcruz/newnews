<?php

    #Base de dados
    include('../db/conexao.php');


    if(isset($_POST['email']) || isset($_POST['senha'])) {

   
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {
        
        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['loginType'] = $usuario['statusUser'];
        echo "login realizado";
        header("Location:../index.php?pagina=home");

    } else {
        echo "Falha ao logar! E-mail ou senha incorretos";
    }



}