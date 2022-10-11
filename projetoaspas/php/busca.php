<?php
    $sql = "SELECT * FROM cliente;";
    $rescliente = mysqli_query($mysqli, $sql);
    $linhascliente = mysqli_num_rows($rescliente);

    $sql2 = "SELECT * FROM funcionario;";
    $resfun = mysqli_query($mysqli, $sql2);
    $linhasfuncionario = mysqli_num_rows($resfun);

    $sql3 = "SELECT * FROM servico;";
    $resservico = mysqli_query($mysqli, $sql3);
    $linhasservico = mysqli_num_rows($resservico);
?>