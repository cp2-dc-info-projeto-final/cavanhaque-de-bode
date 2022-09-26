<?php 
    session_start();
    if(isset($_SESSION['usuario'])) {
        header('Location: perfil.php?menu_perfil='.'exibir');
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
        
        <h1>Cadastro</h1>
        <?php if(isset($_SESSION["nao_autenticado"])){echo"<p>Esse email já está sendo utilizado</p>";}
        unset($_SESSION["nao_autenticado"]);?>
        <form action="register.php" method="POST">
            <input type="hidden" name="operacao" value="cadastro">
            <p>Nome: <input type="text" name="nome" required></p>
            <p>E-mail: <input type="text" name="email" required></p>
            <p>Senha: <input type="password" name="senha" required ></p>
            <p>Confirme a senha: <input type="password" name="confirmsenha" required></p>
            <p><input type="submit" value="Cadastrar"></p> 
        </form><br>
    
    </body>

</html>