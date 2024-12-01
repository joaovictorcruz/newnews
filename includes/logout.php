<?php

if(!isset($_SESSION)) {
    session_start();
}

if (isset($_COOKIE)) {
    foreach($_COOKIE as $name => $value) {
        setcookie($name, '', 1);
        setcookie($name, '', 1, '/');
        
    }
}

session_destroy();

echo "Voce foi deslogado";
header("Location: ../index.php");
