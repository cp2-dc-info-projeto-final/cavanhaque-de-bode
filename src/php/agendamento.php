<?php include "../sql/conectamysqlcdb.php";?>
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
                <a href="" class="navbar-brand"> 
                    <img src="../imgs/logocdb.ico" alt="Logo" height="70" class="d-inline-block">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav-target">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-none d-md-inline">
                    <p><a href="" class="brand" style="color: black;">AGENDAMENTO</a></p>
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
            <h1 class="fontecdb">Selecione uma data:</h1>
        </div>
        <?php 
            $hoje = date('d-m-Y');
            $duassemanas = date('d-m-Y', strtotime('2 weeks'));

            $start = new DateTime($hoje);
            $end = new DateTime($duassemanas);
            $intervalo = new DateInterval("P1D");

            $period = new DatePeriod($start, $intervalo, $end);
            $datas = [];

            

            echo "<form action='agendaconfirma.php' method='POST'>";
            echo "<div class='container-fluid'>";
            foreach ($period as $p) {
                $day_num = $p->format("N");
                
                if($day_num < 7) {
                    $data = $p->format('d/m/y');
                    echo "
                        <input type='radio' class='btn-check' name='opcaodata' value='$data' id='$data' autocomplete='off' required>
                        <label class='btn btn-outline-dark' for='$data'>$data</label>";
                }
            }
            echo "</div>";
        ?>
        <div class="container-fluid mt-3 mb-3">
            <h1 class="fontecdb">Selecione um servico:</h1>
        </div><div class="container-fluid mt-2">
            <?php
                $sql = "SELECT * FROM servico";
                $resservico = mysqli_query($mysqli, $sql);
                $linhasservico = mysqli_num_rows($resservico);

                for($i=0; $i < $linhasservico; $i++){
                    $servico = mysqli_fetch_array($resservico);
                    $nomeservico = $servico['nome'];
                    $precoservico  = $servico['preco'];
                    $idservico  = $servico['id_servico'];
                    echo "
                        <input type='radio' class='btn-check' name='opcaoservico' value='$idservico' id='$nomeservico' autocomplete='off' required>
                        <label class='btn btn-outline-dark' for='$nomeservico'>$nomeservico | Preço: R$ $precoservico</label>";
                }
            ?>
        </div>
        <div class="">
            <button type="submit" class="btn-dark mt-5" style="padding: 10px 150px; margin-left: 10px; border-radius: 12px;">CONTINUAR</button>
        </div>
    <script src="../js/validacao.js"></script>
    </body>
</html>