<?php include('conectamysqlcdb.inc') ?>
<html>
    <head>
        <title>Cavanhaque de Bode</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body bgcolor="black">
        
        <table border="1" width="1315">
            <tr>
                <td><a class="titulotabela" href="mainpage.html">CAVANHAQUE DE BODE</a></td>
                <td align="right">
                    <a href="login.html">PERFIL</a> |
                    <a href="agendamento.html">AGENDAMENTO</a> |
                    <a href="quemsoueu.html">QUEM SOU EU?</a> |
                </td>
            </tr>
        </table>

        <h1>Login</h1>
        
        <form action="registerlogin.php" method="POST">
            <p>E-mail: <input type="text" name="email"></p>
            <p>Senha: <input type="password" name="senha"></p>
            <p><input type="submit" value="Entrar"></p> 
        </form><br>
        
        <a class="burrao" href="cadastro.html"> Cadastre-se aqui</a>
        
    </body>
</html>