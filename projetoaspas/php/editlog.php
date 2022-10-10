
<?php
    session_start();
    include "../sql/conectamysqlcdb.php";

    $operacao = $_POST["operacao"];
    $usuario = $_POST['usuario'];    
    
    if($usuario == "cliente"){
        if($operacao == "alterar"){
            $nome = $_POST["nome"]; 
            $email = $_POST["emailalterar"];
            $senha = $_POST["senhaalterar"];
            $confirmasenha = $_POST["confirmasenhaalterar"];  
            $id_cliente = $_SESSION['cliente'];
                
            $sql = "SELECT * FROM cliente WHERE email = '$email';";
            $res = mysqli_query($mysqli, $sql);
            $linhas1 = mysqli_num_rows($res);
            $cliente = mysqli_fetch_array($res);

            $sql2 = "SELECT * FROM funcionario WHERE email = '$email';";
            $res2 = mysqli_query($mysqli, $sql2);
            $linhas2 = mysqli_num_rows($res2);

            $sql3 = "SELECT * FROM adm WHERE email = '$email';";
            $res3 = mysqli_query($mysqli, $sql3);
            $linhas3 = mysqli_num_rows($res3);
            
            $linhas = $linhas2 + $linhas3;

            $erro = 0;
            
            if($email != $cliente['email'] and $linhas1 ==1){
                $_SESSION['na-alterar'] = "alterar";
                header('Location: perfilcliente.php');
            }
                
            if($linhas == 1){
                $_SESSION['na-alterar'] = "alterar";
                header('Location: perfilcliente.php');
            }
            else if(strstr($email, '@') == false){
                $_SESSION['na-alterar'] = "email";
                header('Location: perfilcliente.php');
                $erro = 1;
            }
            else if(empty($nome) || empty($senha) || empty($confirmasenha) || empty($email)){
                $_SESSION['na-alterar'] = "vazio";
                header('Location: perfilcliente.php');
                $erro = 1; 
            }
            else if($senha != $confirmasenha){
                $_SESSION['na-alterar'] = "senhas";
                header('Location: perfilcliente.php');
                $erro = 1; 
            }
            else{
                $sql = "UPDATE cliente SET nome = '$nome', email = '$email' WHERE id_cliente = $id_cliente;";
                mysqli_query($mysqli,$sql);
                unset($_SESSION['na-alterar']);
                header('Location: perfilcliente.php');
            }
        }
    }
?>