<?php
    session_start();
?>
<html>
    <head>
        <title>Cavanhaque de Bode</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    
    <body bgcolor="black">
        
        <table border="1" width="1315">
            <tr>
                <td><a class="titulotabela" href="">CAVANHAQUE DE BODE</a></td>
                <td align="right">
                    <a href= <?php if(isset($_SESSION["usuario"])){echo"perfil.php?menu_perfil="."exibir";}else{echo"login.php";} ?>>PERFIL</a> |
                    <a href="../agendamento.html">AGENDAMENTO</a> |
                    <a href="../quemsoueu.html">QUEM SOU EU?</a> |
                </td>
            </tr>
        </table>
    
    </body>
</html>