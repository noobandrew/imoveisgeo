<?php
header('Content-type: text/html; charset=ISO-8859-1');




$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'topomaster';


$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if ($conexao->connect_errno) {
//     echo "Erro";
// } else {
//     echo "Conectado";
// }



    ?>
