<?php               
    include "../sql/conectamysqlcdb.php";
    session_start();
    $h = "9:00";
    $data = $_SESSION['data-agendamento'];

    $h = date('H:i:s', strtotime($h));
    $data = str_replace('/', '-', $data); 
    $data = date('Y-m-d', strtotime($data));

    $sql = "SELECT * FROM agendamento WHERE horario LIKE '$h' AND data_agendamento LIKE '$data';";
    $res = mysqli_query($mysqli, $sql);
    $linhas = mysqli_num_rows($res);

    $sql1 = "SELECT * FROM funcionario;";
    $res1 = mysqli_query($mysqli, $sql1);
    $linhasfun = mysqli_num_rows($res1);
    
    if($linhas == $linhasfun){
        ECHO "INDISPONIVEL <br> $data <br> $h <br> $linhas <br> $linhasfun";
    }
    else{
        ECHO "DISPONIVEL <br> $data <br> $h <br> $linhas <br> $linhasfun"; 
    }

    
?>