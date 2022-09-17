<?php
    session_start();
    include "conectamysqlcdb.php";
    if(!$_SESSION['usuario']) {
        header('Location: login.php');
        exit();
    }
    echo "sessao do usuario de id: ". $_SESSION['usuario']."<br>";
    echo "<a class='burrao' href='mainpage.php'> Voltar</a><br>";
    echo "<a class='burrao' href='logout.php'> Logout</a>";
?>
