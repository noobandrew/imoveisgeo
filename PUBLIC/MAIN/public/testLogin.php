<?php
session_start();

//    print_r($_REQUEST);

    if(!empty($_POST['codigo']))
    {
        // foi enviado o formulário
        include_once('conexao.php');

        $codigo = $_POST['codigo'];
        

        $sql = "SELECT * FROM `USUARIOS` WHERE pro1code = '$codigo' OR pro2code = '$codigo' OR pro3code = '$codigo' OR pro4code = '$codigo' OR pro5code = '$codigo'";
        $result = $conexao->query($sql);


        if(mysqli_num_rows($result) < 1) 
        {
            unset($_SESSION['codigo']);
            header('Location: index.php');
        } else {
            $_SESSION['codigo'] = $codigo;
            header('Location: mainpage_NEW.php');        
        }

        print_r($result);
        } else {


        // não foi enviado o formulário
        header('Location: index.php');
    
    
    
    }
    ?>