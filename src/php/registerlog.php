<?php
    session_start();
    include "../sql/conectamysqlcdb.php";

    $operacao = $_POST["operacao"];
   
    if($operacao == "cadastro"){
        $nome = $_POST["nome"]; 
        $email = $_POST["emailcadastro"];
        $senha = $_POST["senhacadastro"];
        $confirmasenha = $_POST["confirmasenha"];   
            
        $sql = "SELECT * FROM cliente WHERE email = '$email';";
        $res = mysqli_query($mysqli, $sql);
        $linhas = mysqli_num_rows($res);
            
        $erro = 0;
            
        if($linhas == 1){
            $_SESSION['na-cadastro'] = "cadastro";
            header('Location: mainpage.php');
        }
        else if(strstr($email, '@') == false){
            $_SESSION['na-cadastro'] = "email";
            header('Location: mainpage.php');
            $erro = 1;
        }
        else if(empty($nome) || empty($senha) || empty($confirmasenha) || empty($email)){
            $_SESSION['na-cadastro'] = "vazio";
            header('Location: mainpage.php');
            $erro = 1; 
        }
        else if($senha != $confirmasenha){
            $_SESSION['na-cadastro'] = "senhas";
            header('Location: mainpage.php');
            $erro = 1; 
        }
        else{
            $senhacripto = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO cliente (nome, email, senha) VALUES ('$nome','$email','$senhacripto');";
            mysqli_query($mysqli,$sql);
            $busca_cliente = $sql = "SELECT id_cliente FROM cliente WHERE senha = '$senhacripto';";
            $res = mysqli_query($mysqli,$busca_cliente);
            $cliente = mysqli_fetch_array($res);
            $_SESSION['cliente'] = $cliente['id_cliente'];
            header('Location: perfilcliente.php');
        }
    }
    
    if($operacao == "login"){

        $email = mysqli_real_escape_string($mysqli, $_POST["emaillogin"]);
        $senha = $_POST["senhalogin"];

        $sql1 = "SELECT id_cliente, senha FROM cliente WHERE email = '$email'";
        $rescliente = mysqli_query($mysqli, $sql1);
        $cliente = mysqli_fetch_array($rescliente);
        $linhasciente = mysqli_num_rows($rescliente);

        $sql2 = "SELECT id_funcionario, senha FROM funcionario WHERE email = '$email'";
        $resfuncionario = mysqli_query($mysqli, $sql2);
        $funcionario = mysqli_fetch_array($resfuncionario);
        $linhasfuncionario = mysqli_num_rows($resfuncionario);
        
        $sql3 = "SELECT id_adm, senha FROM adm WHERE email = '$email'";
        $resadm = mysqli_query($mysqli, $sql3);
        $adm = mysqli_fetch_array($resadm);
        $linhasadm = mysqli_num_rows($resadm);

        if(password_verify($senha, $cliente['senha']) and $linhasciente == 1){
            $_SESSION['cliente'] = $cliente['id_cliente'];
            header('Location: perfilcliente.php');
        }

        else if(password_verify($senha, $funcionario['senha']) and $linhasfuncionario == 1){
            $_SESSION['funcionario'] = $funcionario['id_funcionario'];
            header('Location: perfilfuncionario.php');
        }

        else if(password_verify($senha, $adm['senha']) and $linhasadm == 1){
            $_SESSION['adm'] = $adm['id_adm'];
            header('Location: perfiladm.php');
        } 
        else {
            $_SESSION['na-login'] = true;
            header('Location: mainpage.php');
        }
    }
?>