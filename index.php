<?php
#Base de dados
include('./db/conexao.php');

#Cabeçalho
include 'header.php';

#iniciar sessão
session_start();

#Conteúdo da página
if(isset($_SESSION['id'])){//se existir um login
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'home';
	}
}

else{
		$pagina = 'home';
}

switch ($pagina) {
	case 'login': include 'templates/login.php'; break;
	case 'cadastro': include 'templates/cadastro.php'; break;
	case 'EscreverNotica': include 'templates/noticiaForm.php'; break;
    case 'conta' : include 'templates/contaUsuario.php'; break;
	default: include 'templates/home.php'; 
	break;
}

#Rodapé
include 'footer.php';