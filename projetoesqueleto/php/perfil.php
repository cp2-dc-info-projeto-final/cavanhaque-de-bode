<?php
    session_start();
    include "conectamysqlcdb.php";
    if(!$_SESSION['usuario']) {
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cavanhaque de Bode</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body bgcolor="black">

        <table border="1" width="1315">
            <tr>
                <td><a class="titulotabela" href="mainpage.php">CAVANHAQUE DE BODE</a></td>
                <td align="right">
                    <a href="login.php">PERFIL</a> |
                    <a href="../agendamento.html">AGENDAMENTO</a> |
                    <a href="../quemsoueu.html">QUEM SOU EU?</a> |
                </td>
            </tr>
        </table>
        <table border="1" width="1315">
            <tr>
                <td><a class="titulotabela2" href="">PERFIL</a></td>
                <td align="right">
                    <a href="">ALTERAR DADOS</a> |
                    <a href=""> EXCLUIR CONTA</a> |
                </td>
            </tr>
        </table>
        <p>==================================</p> 
        <h2> DADOS DE USUÁRIO </h2>
    </body>
</html>
<?php

    $usuarioid = $_SESSION['usuario'];
    $sql = "SELECT nome, email FROM usuario WHERE id = $usuarioid;"; 
    $res = mysqli_query($mysqli, $sql);
    $usuario = mysqli_fetch_array($res);
    echo "<p>Nome: ".$usuario["nome"]."</p>";
    echo "<p>Email: ".$usuario["email"]."</p>";
    echo "<p>=================================="."</p><br>"; 

    echo "<a class='burrao' href='mainpage.php'> Voltar &nbsp </a>";
    echo "<a class='burrao' href='logout.php'> Logout</a>";
?>
