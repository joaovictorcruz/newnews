<?php

if(!isset($_SESSION)) {
    session_start();
}

if(isset($_GET['pagina']) && $_GET['pagina'] == "home" || $_GET['pagina'] == "login" || $_GET['pagina'] == "cadastro"){ 
if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}
}

if(isset($_GET['pagina']) && $_GET['pagina'] == "admnistrador"){
    if(isset($_SESSION['loginType'])){
        if($_SESSION['loginType'] != "admnistrador"){
            die(header("location: home.php"));
        }
    }
}

if(isset($_GET['pagina']) && $_GET['pagina'] == "escreverNoticia"){
    if(isset($_SESSION['loginType'])){
        if($_SESSION['loginType'] != "editor"){
            die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
        }
    }
}

?>