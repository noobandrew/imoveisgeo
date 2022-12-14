<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página sem estar logado. <p><ahref=\"index.php\"> Entrar</a></p>")
}

?>