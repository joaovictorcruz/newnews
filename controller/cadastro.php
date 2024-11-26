<?php
if(isset($_POST['email']) || isset($_POST['senha'])) {

    $senha = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    $senha = $mysqli->real_escape_string($_POST['statusUser']);

    $sql_code = "INSERT INTO tb_usuarios (nome,email, senha, statusUser) VALUES ('$nome','$email','$senha', '$statusUser')";
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

        header("Location: painel.php");

    }

}
