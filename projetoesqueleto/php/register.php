<?php 
    session_start();
    include "conectamysqlcdb.php";
?>

<html>
   <head>
        <title>Cavanhaque de Bode</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body bgcolor="black">
    <?php
        $operacao = $_POST["operacao"];
        if($operacao == "cadastro"){
            $nome = $_POST["nome"]; 
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $confirmsenha = $_POST["confirmsenha"];   
            
            $sql = "SELECT * FROM cliente WHERE email = '$email';";
            $res = mysqli_query($mysqli, $sql);
            $linhas = mysqli_num_rows($res);
            
            $erro = 0;
            
            if($linhas == 1){
                $_SESSION['nao_autenticado'] = true;
                header('Location: cadastro.php');
            }

            else if(strlen($email) < 10 or strstr($email, '@') == false){
                echo "<p>Por favor, preencha o e-mail corretamente.<br></p>";
                $erro = 1;
            }
            else if($senha != $confirmsenha){
                echo "<p>Por favor, verifique se as senhas são iguais.<br></p>";
                $erro = 1; 
            }
            else if($erro == 0){
                $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome','$email','$senha');";
                mysqli_query($mysqli,$sql);
                $busca_usuario = $sql = "SELECT id FROM usuario WHERE email = '$email';";
                $res = mysqli_query($mysqli,$busca_usuario);
                $usuario = mysqli_fetch_array($res);
                $_SESSION['usuario'] = $usuario['id'];
                echo "<p>Registro concluído com sucesso!</p>";
                echo "<a class='burrao' href='mainpage.php'> Voltar &nbsp</a>";
                echo "<a class='burrao' href='perfil.php?menu_perfil=exibir'> Visualizar perfil</a>";
                
            }
        }
        
        if($operacao == "login"){
            
            if(empty($_POST["email"]) or empty($_POST["email"])){
                echo "deu ruim";
            }

            $email = mysqli_real_escape_string($mysqli, $_POST["email"]);
            $senha = mysqli_real_escape_string($mysqli, $_POST["senha"]);

            $sql = "SELECT id FROM usuario WHERE email = '$email' and senha = '$senha'";
            $res = mysqli_query($mysqli, $sql);
            $linhas = mysqli_num_rows($res);

            if($linhas == 1) {
                $usuario = mysqli_fetch_array($res);
                $_SESSION['usuario'] = $usuario['id'];
                header('Location: perfil.php?menu_perfil='.'exibir');
            } else {
                $_SESSION['nao_autenticado'] = true;
                header('Location: login.php');
            }
        }
        
        if($operacao == "alterar"){
            $usuarioid = $_POST["usuarioid"];
            $nome = $_POST["nome"]; 
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $confirmsenha = $_POST["confirmsenha"];        
            
            $erro = 0;
            
            $sql = "SELECT email FROM usuario WHERE email = '$email';";
            $res = mysqli_query($mysqli, $sql);
            $linhas = mysqli_num_rows($res);
            
            $erro = 0;
            
            if($linhas == 1){
                $_SESSION['nao_autenticado'] = true;
                header('Location: perfil.php?menu_perfil=alterar');
            }

            else if(strlen($email) < 10 or strstr($email, '@') == false){
                echo "<p>Por favor, preencha o e-mail corretamente.<br></p>";
                echo "<a class='burrao' href='perfil.php?menu_perfil=exibir'>Voltar</a>";
                $erro = 1;
            }
            else if($senha != $confirmsenha){
                echo "<p>Por favor, verifique se as senhas são iguais.<br></p>";
                echo "<a class='burrao' href='perfil.php?menu_perfil=exibir'>Voltar</a>";
                $erro = 1; 
            }
            else if($erro == 0){
                $sql = "UPDATE usuario SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $usuarioid;";
                mysqli_
                








                
            $erro = 0;
            if($senha != $confirmsenha){
                echo "<p>Por favor, verifique se as senhas são iguais.<br></p>";
                echo "<a class='burrao' href='perfil.php?menu_perfil=exibir'>Voltar</a>";
                $erro = 1; 
            }
            else if($erro == 0){
                $sql = "DELETE FROM usuario WHERE id = $usuarioid;";
                mysqli_query($mysqli,$sql); 
                mysqli_close($mysqli);
                echo "<h2>Conta excluída com sucesso!</h2>";
                echo "<a class='burrao' href='logout.php'>Menu Principal</a>";
            }
        }
    ?>
    </body>
</html>