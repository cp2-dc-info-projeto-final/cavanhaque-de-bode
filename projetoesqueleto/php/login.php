<?php session_start()?>
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

        <h1>Login</h1>
        <?php if(isset($_SESSION["nao_autenticado"])){echo"<p>Login inexistente</p>";}
        unset($_SESSION["nao_autenticado"]);
        unset($_SESSION["usuario"]);?>
            <form action="register.php" method="POST">
            <input type="hidden" name="operacao" value="login">
            <p>E-mail: <input type="text" name="email" required></p>
            <p>Senha: <input type="password" name="senha" required></p>
            <p><input type="submit" value="Entrar"></p> 
        </form><br>
        
        <a class="burrao" href="cadastro.html"> Cadastre-se aqui</a>
        
    </body>
</html>