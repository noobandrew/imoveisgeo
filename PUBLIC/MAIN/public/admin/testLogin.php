<?php
header('Content-type: text/html; charset=ISO-8859-1');





session_start();

//    print_r($_REQUEST);

    if(!empty($_POST['admcode']))
    {
        // foi enviado o formulário
        include_once('conexao.php');

        $codigo = $_POST['admcode'];
        

        $sql = "SELECT * FROM `usuarios` WHERE admcode = '$codigo'";
        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1) 
        {
            unset($_SESSION['admcode']);
            header('Location: index.php');
        } else {
            $_SESSION['admcode'] = $codigo;
            header('Location: mainpage_NEW.php');        
        }

        print_r($result);
        } else {


        // não foi enviado o formulário
        header('Location: index.php');
    
    
    
    }
    ?>