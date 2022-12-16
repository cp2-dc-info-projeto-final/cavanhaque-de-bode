<?php
    
    function verificahorario($horario, $data){

        include "../sql/conectamysqlcdb.php"; 
        
        $horario = date('H:i:s', strtotime($horario));
        $data = str_replace('/', '-', $data); 
        $data = date('Y-m-d', strtotime($data));

        $sql = "SELECT * FROM agendamento WHERE horario LIKE '$horario' AND data_agendamento LIKE '$data';";
        $res = mysqli_query($mysqli, $sql);
        $linhas = mysqli_num_rows($res);

        $sql1 = "SELECT * FROM funcionario;";
        $res1 = mysqli_query($mysqli, $sql1);
        $linhasfun = mysqli_num_rows($res1);
        
        if($linhas == $linhasfun){
            return true;
        }
        else{
            return false;
        }
    }

    verificahorario('17:00', "20/12/2022");
?>