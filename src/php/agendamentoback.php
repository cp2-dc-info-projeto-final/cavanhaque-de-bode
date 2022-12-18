<?php
    session_start();
    include "../sql/conectamysqlcdb.php";

    if($_POST['form-agendamento'] == 1){
        
        $data = $_POST['opcaodata'];
        $servico = $_POST['opcaoservico'];

        $sql = "SELECT * FROM servico WHERE id_servico LIKE '$servico'";
        $resservico = mysqli_query($mysqli, $sql);
        $linhasservico = mysqli_fetch_array($resservico);

        $_SESSION['nome-servico-agendamento'] = $linhasservico['nome'];
        $_SESSION['data-agendamento'] = $data;
        $_SESSION['servico-agendamento'] = $servico;
        $_SESSION['etapa1-agendamento'] = TRUE;

        header('Location: agendamento2.php');
    }
    
    if($_POST['form-agendamento'] == 2){
        $hora = $_POST['opcaohora'];

        $_SESSION['hora-agendamento'] = $hora;
        $_SESSION['etapa2-agendamento'] = TRUE;
        
        header('Location: agendamento3.php');
    }
    
    if($_POST['form-agendamento'] == 3){
        $funcionario = $_POST['opcaofuncionario'];
        $_SESSION['funcionario-agendamento'] = $funcionario;
        
        if($funcionario != 'Sem Preferência'){
            $sql2 = "SELECT * FROM funcionario WHERE id_funcionario LIKE '$funcionario'";
            $resfuncionario = mysqli_query($mysqli, $sql2);
            $linhasfuncionario = mysqli_fetch_array($resfuncionario);
            $_SESSION['nome-funcionario-agendamento'] = $linhasfuncionario['nome'];
        }
        else{
            $_SESSION['nome-funcionario-agendamento'] = 'Sem Preferência';
        }
        
        if (isset($_SESSION['cliente']) || isset($_SESSION['funcionario']) || isset($_SESSION['adm'])){
            header('Location: agendamento3.php');
            $_SESSION['etapa3-agendamento'] = TRUE;
        }
        else{
            header('Location: mainpage.php');
            $_SESSION['login-agendamento'] = true;
            $_SESSION['etapa3-agendamento'] = TRUE;
        }
    }
    if($_POST['form-agendamento'] == "enviar"){
        $servico = $_SESSION['servico-agendamento'];
        $cliente = $_SESSION['cliente'] ;
        $funcionario = $_SESSION['funcionario-agendamento'];
        $data = $_SESSION['data-agendamento'];
        $hora = $_SESSION['hora-agendamento'];
        $hora = date('H:i:s', strtotime($hora));
        $data = str_replace('/', '-', $data); 
        $data = date('Y-m-d', strtotime($data));

        $sql = "SELECT * FROM funcionario";
        $resfuncionario = mysqli_query($mysqli, $sql);
        $linhasfuncionario = mysqli_num_rows($resfuncionario);

        if($funcionario == "Sem Preferência"){
            $fundisponiveis = [];
            for($i=0; $i < $linhasfuncionario; $i++){
                $funcionario = mysqli_fetch_array($resfuncionario);
                $idfuncionario = $funcionario['id_funcionario'];

                $sql = "SELECT id_funcionario FROM agendamento WHERE horario LIKE '$hora' AND data_agendamento LIKE '$data' AND id_funcionario LIKE '$idfuncionario';";
                $res = mysqli_query($mysqli, $sql);
                $linhas = mysqli_num_rows($res);

                if($linhas == 0){
                    array_push($fundisponiveis, $idfuncionario);
                    
                }
            }
            $chaves = array_rand($fundisponiveis);
            $sql = "INSERT INTO agendamento (id_cliente, id_funcionario, id_servico, horario, data_agendamento) VALUES ($cliente,".$fundisponiveis[$chaves].", $servico, '$hora', '$data')";
            mysqli_query($mysqli,$sql);
            
        }
        else{
            $sql = "INSERT INTO agendamento (id_cliente, id_funcionario, id_servico, horario, data_agendamento) VALUES ($cliente, $funcionario, $servico, '$hora', '$data')";
            mysqli_query($mysqli,$sql);
        }
    }
?>