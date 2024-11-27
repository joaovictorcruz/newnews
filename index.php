<?php
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

#Cabeçalho
include './includes/header.php';

#iniciar sessão
session_start();

#Conteúdo da página
switch ($pagina) {
	case 'login': include 'templates/login.php'; break;
	case 'cadastro': include 'templates/cadastro.php'; break;
	case 'EscreverNotica': include 'templates/noticiaForm.php'; break;
    case 'conta' : include 'templates/contaUsuario.php'; break;
	default: include 'templates/home.php'; 
	break;
}

#Rodapé
include './includes/footer.php';