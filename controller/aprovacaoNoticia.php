<?php 
    #iniciar sessão
    session_start();

    if(isset($_GET['noticiaId'])){
	$noticiaId = $_GET['noticiaId'];
	}

    if (isset($_GET['aprovacao'])) {
        $aprovacao = $_GET['aprovacao'];
        $valoresValidos = ['aprovado','rejeitado'];
        
        if (!in_array($aprovacao, $valoresValidos)) {
            die("Erro: Valor de aprovação inválido.");
        }
    } else {
        header('location: ../index.php?pagina=home');
        exit;
    }
    

    

    #Base de dados
    include('../db/conexao.php');

    $sql_upAprovacao = "UPDATE materias SET aprovacao = '$aprovacao' WHERE id = $noticiaId;";
    $sql_queryAprovacao = $mysqli->query($sql_upAprovacao) or die("Falha na execução do código SQL: " . $mysqli->error);
    $administradorId = $_SESSION['id'];
    $sql_code = "UPDATE materias SET administradorId = $administradorId WHERE id = $noticiaId;";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    

    header("location:../index.php?pagina=administrador")

?>


    