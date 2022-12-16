<?php
    session_start();
    $data = $_POST['opcaodata'];
    $servico = $_POST['opcaoservico'];

    $_SESSION['data-agendamento'] = $data;
    $_SESSION['servico-agendamento'] = $servico;
    
    if($_POST['etapa-agendamento'] == 1){
        $_SESSION['etapa1-agendamento'] = true;
    }

    header('Location: mainpage.php');
?>