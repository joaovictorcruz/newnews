<?php
	if(isset($_GET['pagina'])){
			$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'home';
	}



if($pagina != 'login' && $pagina != 'cadastro' ){
	include './includes/header.php';
}


#iniciar sessão
session_start();

#Conteúdo da página
switch ($pagina) {
	case 'login': include 'templates/loginForm.php'; break;
	case 'noticia': include 'templates/noticia.php'; break;
	case 'cadastro': include 'templates/cadastroForm.php'; break;
	case 'EscreverNotica': include 'templates/noticiaForm.php'; break;
    case 'conta' : include 'templates/contaUsuario.php'; break;
	case 'home': include 'templates/home.php'; break; 
}

#Rodapé
include './includes/footer.php';