<?php
    session_start();

    if($_POST['form-agendamento'] == 1){
        $data = $_POST['opcaodata'];
        $servico = $_POST['opcaoservico'];

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
        $_SESSION['etapa3-agendamento'] = TRUE;
        
        header('Location: agendamento3.php');
    }
?>