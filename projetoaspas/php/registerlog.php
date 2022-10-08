<?php
    session_start();
    include "../sql/conectamysqlcdb.php";

    $operacao = $_POST["operacao"];
   
    if($operacao == "cadastro"){
        echo $operacao;
        echo $_POST["nome"];
    }
    
    if($operacao == "login"){
            
        if(empty($_POST["emaillogin"]) or empty($_POST["emaillogin"])){
            echo "deu ruim";
        }

        $email = mysqli_real_escape_string($mysqli, $_POST["emaillogin"]);
        $senha = mysqli_real_escape_string($mysqli, $_POST["senhalogin"]);

        $sql = "SELECT id FROM cliente WHERE email = '$email' and senha = '$senha'";
        $res = mysqli_query($mysqli, $sql);
        $linhas = mysqli_num_rows($res);

        if($linhas == 1) {
            $usuario = mysqli_fetch_array($res);
            $_SESSION['cliente'] = $usuario['id'];
            header('Location: perfil.php');
        } else {
            $_SESSION['nao-autenticado'] = true;
            header('Location: mainpage.php');
        }
    }
?>