<?php 
    session_start();
    include "../sql/conectamysqlcdb.php";

    $data = date("Y-m-d", strtotime($_POST['opcaodata']));
    $hora = $_POST['opcaohora'];
    $servico = $_POST['opcaoservico'];
    $funcionario = $_POST['opcaofuncionario'];

    if(isset($_SESSION["cliente"])){
        $idcliente = $_SESSION["cliente"];
    }
    else if(isset($_SESSION["adm"])){
        $idcliente = $_SESSION["adm"];
    }

    echo $idcliente, $funcionario, $servico, $hora, $data;
    
    $sql = "INSERT INTO agendamento (id_cliente, id_funcionario, id_servico, horario, data_agendamento) VALUES ($idcliente, $funcionario, $servico, '$hora', '$data');";
    mysqli_query($mysqli,$sql);
?>