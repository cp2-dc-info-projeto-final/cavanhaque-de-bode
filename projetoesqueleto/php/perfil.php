<?php
    session_start();
    include "conectamysqlcdb.php";
    if(!$_SESSION['usuario']) {
        header('Location: login.php');
        exit();
    }
    
    $menu_perfil = $_GET["menu_perfil"];
    $usuarioid = $_SESSION['usuario'];
    $sql = "SELECT nome, email, senha FROM usuario WHERE id = $usuarioid;"; 
    $res = mysqli_query($mysqli, $sql);
    $usuario = mysqli_fetch_array($res);

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
                    <a href="../agendamento.html">AGENDAMENTO</a> |
                    <a href="../quemsoueu.html">QUEM SOU EU?</a> |
                </td>
            </tr>
        </table>
        <table border="1" width="1315">
            <tr>
                <td><a class="titulotabela2" href="?menu_perfil=exibir">PERFIL</a></td>
                <td align="right">
                    <a href="?menu_perfil=alterar">ALTERAR DADOS</a> |
                    <a href="?menu_perfil=excluir"> EXCLUIR CONTA</a> |
                </td>
            </tr>
        </table>
<?php
    if($menu_perfil == "exibir"){
        
        echo "<p>==================================</p>";
        echo "<h2> DADOS DE USUÁRIO </h2>";
        echo "<p>Nome: ".$usuario["nome"]."</p>";
        echo "<p>Email: ".$usuario["email"]."</p>";
        echo "<p>=================================="."</p><br>"; 

        echo "<a class='burrao' href='mainpage.php'> Voltar &nbsp </a>";
        echo "<a class='burrao' href='logout.php'> Logout</a>";
    }
    
    if($menu_perfil == "alterar"){?>
        <h2>ALTERAR DADOS</h2>
        <form action="register.php" method="POST"> 
            <input type="hidden" name="operacao" value="alterar">
            <input type="hidden" name="usuarioid" value="<?php echo $usuarioid ?>">
            <p>Nome: <input type="text" name="nome" value="<?php echo $usuario['nome']?>" required></p>
            <p>E-mail: <input type="text" name="email" value="<?php echo $usuario['email']?>" required></p>
            <p>Senha: <input type="text" name="email" value="<?php echo $usuario['senha']?>" required></p>           
            <p><input type="submit" value="Enviar"></p>
        </form>
<?php }
    
    if($menu_perfil == "excluir"){
        
    }

?>
    </body>
</html>
