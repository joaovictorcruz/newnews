<?php

#iniciar sessão
session_start();

if(isset($_COOKIE['id'])){
	$_SESSION['id'] = $_COOKIE['id'];
}
if(isset($_COOKIE['nome'])){
	$_SESSION['nome'] = $_COOKIE['nome'];
}
if(isset($_COOKIE['loginType'])){
	$_SESSION['loginType'] = $_COOKIE['loginType'];
}

	if(isset($_GET['pagina'])){
			$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'home';
	}



if($pagina != 'login' && $pagina != 'cadastro' ){
	include './includes/header.php';
}



#Conteúdo da página
switch ($pagina) {
	case 'login': include 'templates/loginForm.php'; break;
	case 'noticia': include 'templates/noticia.php'; break;
	case 'cadastro': include 'templates/cadastroForm.php'; break;
	case 'escreverNoticia': include 'templates/noticiaForm.php'; break;
    case 'conta' : include 'templates/contaUsuario.php'; break;
	case 'home': include 'templates/home.php'; break; 
}

#Rodapé
include './includes/footer.php';