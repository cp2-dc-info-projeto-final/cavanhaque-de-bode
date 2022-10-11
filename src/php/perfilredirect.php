<?php
    session_start();
    if(isset($_SESSION['cliente'])){
        header('Location: perfilcliente.php');
    }
    
    if(isset($_SESSION['funcionario'])){
        header('Location: perfilfuncionario.php');
    }
    
    if(isset($_SESSION['adm'])){
        header('Location: perfiladm.php');
    }
?>