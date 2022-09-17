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
            
            $erro = 0;

            if(strlen($email) < 10 or strstr($email, '@') == false){
                echo "<p>Por favor, preencha o e-mail corretamente.<br></p>";
                $erro = 1;
            }
            else if($senha != $confirmsenha){
                echo "<p>Por favor, verifique se as senhas são iguais.<br></p>";
                $erro = 1; 
            }
            else if($erro == 0){
                $sql = "INSERT INTO usuario (nome, email, senha)";
                $sql .= "VALUES ('$nome','$email','$senha');";  
                mysqli_query($mysqli,$sql); 
                mysqli_close($mysqli);
                echo "<p>Registro concluído com sucesso!</p>";
                echo "<a class='burrao' href='mainpage.php'> Voltar</a>";
                
            }
        }
        else if($operacao == "login"){
            
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
                header('Location: perfil.php');
            } else {
                $_SESSION['nao_autenticado'] = true;
                header('Location: login.php');
            }
        }

    ?>
    </body>
</html>