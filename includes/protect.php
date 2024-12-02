<?php

if(!isset($_SESSION)) {
    session_start();
}

/*if(isset($_GET['pagina']) && $_GET['pagina'] == "home" || $_GET['pagina'] == "login" || $_GET['pagina'] == "cadastro"){ 
if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}
}
*/

if(isset($_GET['pagina']) && $_GET['pagina'] == "administrador"){
    if(!isset($_SESSION['loginType']) || $_SESSION['loginType'] != "administrador"){
        die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");

    }
}

if(isset($_GET['pagina']) && $_GET['pagina'] == "escreverNoticia"){
    if(!isset($_SESSION['loginType']) || $_SESSION['loginType'] != "editor"){
        die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");

    }
}

?>