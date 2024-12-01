<?php

if(!isset($_SESSION)) {
    session_start();
}

session_destroy();

echo "Voce foi deslogado";
//header("Location: ../index.php");
