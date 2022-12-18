<?php
    include "../sql/conectamysqlcdb.php";
    $horarios = ["9:00", "9:30", "10:00", "10:30", "11:00", "11:30", "12:00", "12:30", "13:00", "13:30", "14:00", "14:30", "15:30", "16:00", "16:30", "17:00", "17:30", "18:00", "18:30"];
    
    foreach($horarios as $h){
        $sql = "INSERT INTO agendamento (id_cliente, id_funcionario, id_servico, horario, data_agendamento) VALUES (1, 3, 1, '$h', '2022-12-20');";
        mysqli_query($mysqli,$sql);
    }


?>