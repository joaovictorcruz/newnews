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
        $usuarioId = $usuario['id'];
        $usuarioNome = $usuario['nome'];
        $usuarioType = $usuario['statusUser'];
        
        $_SESSION['id'] = $usuarioId;
        $_SESSION['nome'] = $usuarioNome;
        $_SESSION['loginType'] = $usuarioType;

        if (isset($_POST['connect']) && $_POST['connect'] == "on") {
            setcookie('id', $usuario['id'], time() + 5 * 60, "/", "", true, true);
            setcookie('nome', $usuario['nome'], time() + 5 * 60, "/", "", true, true);
            setcookie('loginType', $usuario['statusUser'], time() + 5 * 60, "/", "", true, true);
        }

        header("Location:../index.php?pagina=home");
        exit;

    } else {
        echo "Falha ao logar! E-mail ou senha incorretos";
    }



}
