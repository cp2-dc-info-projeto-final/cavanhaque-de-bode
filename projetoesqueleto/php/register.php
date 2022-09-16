<?php include "conectamysqlcdb.php"; ?>
<html>
   <head>
        <title>Cavanhaque de Bode</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
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

            if(empty($nome)){
                echo "<p> Por favor, preencha o campo \"nome\".<br></p>";
                    $erro = 1;
            }

            else if(strlen($email) < 10 or strstr($email, '@') == false){
                echo "<p>Por favor, preencha o e-mail corretamente.<br></p>";
                $erro = 1;
            }
            else if(empty($senha) or empty($confirmsenha)){
                echo "<p>Por favor, preencha o campo \"senha\".<br></p>";
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
                echo "<a class='burrao' href='mainpage.html'> Voltar</a>";
                
            }
        }
        else if($operacao == "login"){
            
            if(empty($_POST['email']) or empty($_POST['email'])){
                echo "deu ruim";
            }

            $email = mysql_real_escape_string($mysqli, $_POST['email']);
            $senha = mysql_real_escape_string($mysqli, $_POST['senha']);

            $query = "SELECT id FROM usuario WHERE email = '$email' and senha '$senha'";
            $result = mysqli_query($mysqli, $query);

            $row = mysqli_num_rows($result);


        }

    ?>
    </body>
</html>