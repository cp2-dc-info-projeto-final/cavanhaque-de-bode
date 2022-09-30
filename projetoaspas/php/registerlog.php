<?php
    $operacao = $_POST["operacao"];
    if($operacao == "cadastro"){
        echo $operacao;
        echo $_POST["nome"];
    }
    if($operacao == "login"){
        echo $operacao;
        echo $_POST["email"];
    }
?>