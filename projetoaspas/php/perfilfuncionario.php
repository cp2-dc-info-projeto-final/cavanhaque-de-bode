<?php
    session_start();
    include "../sql/conectamysqlcdb.php";
?>
<html>
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
        <div class="d-flex flex-column p-3 text-white bg-dark" style="width: 25%; height: 100%;">
            <a href="" class="align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="fas fa-user fa-xl ms-3 me-3"></i>
                <span class="fs-4 fontecdb d-none d-md-inline-block">Olá, funcionario</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link text-white" aria-current="page">
                    <i class="fa-solid fa-clipboard fa-lg me-2" ></i>
                    <span class="fs-6 d-none d-md-inline-block"> Meus dados</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="fa-solid fa-pen fa-lg me-2 mt-4" ></i>
                    <span class="fs-6 d-none d-md-inline-block">Editar dados</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="fa-solid fa-trash-can fa-lg me-2 mt-4" ></i>
                    <span class="fs-6 d-none d-md-inline-block"> Excluir conta</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="fa-solid fa-calendar-days fa-lg me-2 mt-4" ></i>
                    <span class="fs-6 d-none d-md-inline-block"> Agendamentos</span>
                </a>
            </li>
            </ul>
        </div>
    </body>
</html>