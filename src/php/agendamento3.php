<?php   
    session_start();
    include "../sql/conectamysqlcdb.php";
    
    $data = $_SESSION['data-agendamento'];
    $hora = $_SESSION['hora-agendamento'];
    $hora = date('H:i:s', strtotime($hora));
    $data = str_replace('/', '-', $data); 
    $data = date('Y-m-d', strtotime($data));

    /*if(!isset($_SESSION['etapa2-agendamento'])){
        header('Location: agendamento1.php');
    }
    
    unset($_SESSION['etapa2-agendamento']);*/
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../imgs/cartoon_goat_clip_art.ico">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script src="https://kit.fontawesome.com/a6a6543598.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

        <title>Cavanhaque de Bode</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md" style="border-style: solid; border-top: none; border-right: none; border-left: none; border-width: 1px;">
            <div class="container-fluid">
                <a class="navbar-brand"> 
                    <img src="../imgs/logocdb.ico" alt="Logo" height="70" class="d-inline-block">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav-target">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-none d-md-inline">
                    <p><a class="brand" style="color: black;">AGENDAMENTO</a></p>
                </div>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="mainpage.php" class="linknav nav-link" style="color: black;"> MENU PRINCIPAL </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid mt-3 mb-3">
            <form action='agendamentoback.php' method='POST'>
            <h1 class="fontecdb">Selecione um funcionario:</h1>
        </div>
        <div class="container-fluid mt-2">
            <?php
                $sql = "SELECT * FROM funcionario";
                $resfuncionario = mysqli_query($mysqli, $sql);
                $linhasfuncionario = mysqli_num_rows($resfuncionario);

                $sql = "SELECT id_funcionario FROM agendamento WHERE horario LIKE '$hora' AND data_agendamento LIKE '$data';";
                $res = mysqli_query($mysqli, $sql);
                $linhas = mysqli_num_rows($res);

                if($linhas == $linhasfuncionario){
                    echo"
                    <input type='radio' class='btn-check' name='opcaofuncionario' value='sempreferencia' id='sempreferencia' autocomplete='off' disabled>
                    <label class='btn btn-danger' for='sempreferencia'> Sem Preferência</label>"; 
                }
                else{
                    echo"
                    <input type='radio' class='btn-check' name='opcaofuncionario' value='sempreferencia' id='sempreferencia' autocomplete='off' required>
                    <label class='btn btn-outline-dark' for='sempreferencia'> Sem Preferência</label>"; 
                }

                for($i=0; $i < $linhasfuncionario; $i++){
                    $funcionario = mysqli_fetch_array($resfuncionario);
                    $nomefuncionario = $funcionario['nome'];
                    $idfuncionario = $funcionario['id_funcionario'];

                    $sql = "SELECT id_funcionario FROM agendamento WHERE horario LIKE '$hora' AND data_agendamento LIKE '$data' AND id_funcionario LIKE '$idfuncionario';";
                    $res = mysqli_query($mysqli, $sql);
                    $linhas = mysqli_num_rows($res);

                    if($linhas == 1){
                        echo "
                        <input type='radio' class='btn-check' name='opcaofuncionario' value='$idfuncionario' id='$nomefuncionario' autocomplete='off' disabled>
                        <label class='btn btn-danger' for='$nomefuncionario'>$nomefuncionario</label>";
                    }
                    else{
                        echo "
                        <input type='radio' class='btn-check' name='opcaofuncionario' value='$idfuncionario' id='$nomefuncionario' autocomplete='off' required>
                        <label class='btn btn-outline-dark' for='$nomefuncionario'>$nomefuncionario</label>";
                    }
                    
                }
            ?>
        </div>
        <div class="">
            <input type="hidden" value="3" name="form-agendamento">
            <button type="submit" class="btn-dark mt-5" style="padding: 10px 150px; margin-left: 10px; border-radius: 12px;">CONTINUAR</button>
            </form>
        </div>
        <div class="modal fade" id="modalconfirma" tabindex="-1" aria-labelledby="modalconfirmalabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header border-0" style="background-color: black;">
                        <h5 class="modal-title ms-auto" id="TituloModal">CONFIRMA AGENDAMENTO</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"  aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer border-3">
                    </div>
                </div>
            </div>
        </div>

    <?php if(isset($_SESSION['etapa3-agendamento'])){
        echo "<script> var modalconfirma = new bootstrap.Modal(document.getElementById('modalconfirma'));
                modalconfirma.show();
        </script>";
        unset($_SESSION['etapa3-agendamento']);
    }
    ?>
    <script src="../js/validacao.js"></script>
    </body>
</html>
<?php
        
?>