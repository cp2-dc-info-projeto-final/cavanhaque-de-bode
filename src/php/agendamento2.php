<?php   
    session_start();
    include "../sql/conectamysqlcdb.php";
    $data = $_SESSION['data-agendamento'];

    /*if(!isset($_SESSION['etapa1-agendamento'])){
        header('Location: agendamento1.php');
    }
    
    unset($_SESSION['etapa1-agendamento']);*/
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
            <h1 class="fontecdb">Selecione um horario:</h1>
        </div>
        <div class="container-fluid">
            <div>
                Manha:
            </div>
            <?php 
                $horariosmanha = ["9:00", "9:30", "10:00", "10:30", "11:00", "11:30"];
                $cu = "9:00";
                foreach($horariosmanha as $h){
                    $h = date('H:i:s', strtotime($h));
                    $data = str_replace('/', '-', $data); 
                    $data = date('Y-m-d', strtotime($data));

                    $sql = "SELECT * FROM agendamento WHERE horario LIKE '$h' AND data_agendamento LIKE '$data';";
                    $res = mysqli_query($mysqli, $sql);
                    $linhas = mysqli_num_rows($res);

                    $sql1 = "SELECT * FROM funcionario;";
                    $res1 = mysqli_query($mysqli, $sql1);
                    $linhasfun = mysqli_num_rows($res1);
                    $h = date('H:i', strtotime($h));
                    
                    if($linhas == $linhasfun){
                        echo "
                        <input type='radio' class='btn-check' name='opcaohora' value='$h' id='$h' autocomplete='off' disabled>
                        <label class='btn btn-danger' for='$h'>$h</label>";
                    }
                    else{
                        echo "
                        <input type='radio' class='btn-check' name='opcaohora' value='$h' id='$h' autocomplete='off' required>
                        <label class='btn btn-outline-dark' for='$h'>$h</label>";
                    }
                }
            ?>
        </div>
        <div class="container-fluid mt-2">
            <div>
                Tarde:
            </div>
            <?php 
                $horariostarde = ["12:00", "12:30", "13:00", "13:30", "14:00", "14:30", "15:30", "16:00", "16:30", "17:00", "17:30"];
                foreach($horariostarde as $h){
                    $h = date('H:i:s', strtotime($h));
                    $data = str_replace('/', '-', $data); 
                    $data = date('Y-m-d', strtotime($data));

                    $sql = "SELECT * FROM agendamento WHERE horario LIKE '$h' AND data_agendamento LIKE '$data';";
                    $res = mysqli_query($mysqli, $sql);
                    $linhas = mysqli_num_rows($res);

                    $sql1 = "SELECT * FROM funcionario;";
                    $res1 = mysqli_query($mysqli, $sql1);
                    $linhasfun = mysqli_num_rows($res1);
                    $h = date('H:i', strtotime($h));
                    
                    if($linhas == $linhasfun){
                        echo "
                        <input type='radio' class='btn-check' name='opcaohora' value='$h' id='$h' autocomplete='off' disabled>
                        <label class='btn btn-danger' for='$h'>$h</label>";
                    }
                    else{
                        echo "
                        <input type='radio' class='btn-check' name='opcaohora' value='$h' id='$h' autocomplete='off' required>
                        <label class='btn btn-outline-dark' for='$h'>$h</label>";
                    }
                }
            ?>
        </div>
        <div class="container-fluid mt-2">
            <div>
                Noite:
            </div>
            <?php 
                $horariosnoite = ["18:00", "18:30"];
                foreach($horariosnoite as $h){
                    $h = date('H:i:s', strtotime($h));
                    $data = str_replace('/', '-', $data); 
                    $data = date('Y-m-d', strtotime($data));

                    $sql = "SELECT * FROM agendamento WHERE horario LIKE '$h' AND data_agendamento LIKE '$data';";
                    $res = mysqli_query($mysqli, $sql);
                    $linhas = mysqli_num_rows($res);

                    $sql1 = "SELECT * FROM funcionario;";
                    $res1 = mysqli_query($mysqli, $sql1);
                    $linhasfun = mysqli_num_rows($res1);
                    $h = date('H:i', strtotime($h));
                    
                    if($linhas == $linhasfun){
                        echo "
                        <input type='radio' class='btn-check' name='opcaohora' value='$h' id='$h' autocomplete='off' disabled>
                        <label class='btn btn-danger' for='$h'>$h</label>";
                    }
                    else{
                        echo "
                        <input type='radio' class='btn-check' name='opcaohora' value='$h' id='$h' autocomplete='off' required>
                        <label class='btn btn-outline-dark' for='$h'>$h</label>";
                    }
                }
            ?>
        </div>
        <div class="">
            <input type="hidden" value="2" name="form-agendamento">
            <button type="submit" class="btn-dark mt-5" style="padding: 10px 150px; margin-left: 10px; border-radius: 12px;">CONTINUAR</button>
            </form>
        </div>
    <script src="../js/validacao.js"></script>
    </body>
</html>
<?php
        
?>