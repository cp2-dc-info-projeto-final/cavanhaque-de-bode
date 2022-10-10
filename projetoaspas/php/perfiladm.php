<?php
    session_start();
    include "../sql/conectamysqlcdb.php";
    if(!isset($_SESSION['adm'])){
        header('Location: mainpage.php');
    }
    
    $id = $_SESSION['adm'];
    $sql1 = "SELECT nome, email, senha FROM adm WHERE id_adm ='$id'";
    $resadm = mysqli_query($mysqli, $sql1);
    $adm = mysqli_fetch_array($resadm);
    
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
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column text-white min-vh-100">
                    <a href="" class="align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <i class="fas fa-user fa-xl ms-3 me-3 d-none d-md-inline-block"></i>
                        <span class="fs-4 fontecdb d-none d-md-inline-block">Administrador</span>
                    </a>
                    <hr class="d-none d-md-inline-block">
                    <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#dados" class="nav-link text-white" aria-current="page">
                            <i class="fa-solid fa-clipboard fa-lg me-2" ></i>
                            <span class="fs-6 d-none d-md-inline-block">Clientes</span>
                        </a>
                    </li>
                    <hr class="d-sm-block d-md-none">
                    <li>
                        <a href="#alterardados" class="nav-link text-white">
                            <i class="fa-solid fa-pen fa-lg me-2" ></i>
                            <span class="fs-6 d-none d-md-inline-block">Funcionarios</span>
                        </a>
                    </li>
                    <hr class="d-sm-block d-md-none">
                    <li>
                        <a href="#excluirdados" class="nav-link text-white">
                            <i class="fa-solid fa-trash-can fa-lg me-2" ></i>
                            <span class="fs-6 d-none d-md-inline-block">Cadastrar serviços</span>
                        </a>
                    </li>
                    <hr class="d-sm-block d-md-none">
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="fa-solid fa-calendar-days fa-lg me-2" ></i>
                            <span class="fs-6 d-none d-md-inline-block"> Agendamentos</span>
                        </a>
                    </li>
                    </ul>
                    <hr>
                    <a href="mainpage.php" class="nav-link text-white">
                        <i class="fa-solid fa-home fa-lg me-2" ></i>
                        <span class="fs-6 d-none d-md-inline-block">Início</span>
                    </a>
                    <a href="logout.php" class="nav-link text-white">
                        <i class="fa-solid fa-right-to-bracket fa-lg mb-1 me-2 mt-4" ></i>
                        <span class="fs-6 d-none d-md-inline-block">Logout</span>
                    </a>
                    </div>
                </div>
                <div class="col py-3">
                <div class="container border border-dark" id="dados">
                    <p class="fs-2">Meus Dados</p>
                    <?php
                        echo "<p>Nome: ".$adm["nome"]."</p>";
                        echo "<p>Email: ".$adm["email"]."</p>";
                    ?>
                </div>
                <div class="col py-3">
                <div class="container border border-dark" id="dados">
                    <p class="fs-2">Cadastrar Serviços</p>
                    <form action="editlog.php" method="POST" class="needs-validation" novalidate>
                            <input type="hidden" name="operacao" value="cadastrarservico">
                            <div class="row">
                            <div class="col-6">
                                <div class="input-group mt-4">
                                    <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                    <input type="text" class="form-control" id="nomeservico" name="nomeservico" placeholder="Nome do serviço" required>
                                    <input type="hidden" name="usuario" value="adm">
                                    </span> 
                                    <div class="invalid-feedback">
                                        Por favor, preencha este campo .
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group mt-4">
                                    <span class="input-group-text">R$</i></span>
                                    <input type="text" class="form-control" id="precoservico" name="precoservico" placeholder="Preço" required>
                                    </span>
                                    <div class="invalid-feedback">
                                        Por favor, preencha este campo apenas com numeros.
                                    </div>
                                </div>
                            </div>
                            </div>
                            <?php if(isset($_SESSION['na-servicos'])){
                                switch($_SESSION['na-servicos']){
                                    case "existente";    
                                        echo "<div class='alert alert-danger mt-3' id='alert' class='mr-auto'>Esse serviço já existe</div>";
                                        break;
                                    case "vazio";    
                                        echo "<div class='alert alert-danger mt-3' id='alert' class='mr-auto'>Preencha todos os campos.</div>";
                                        break;
                                    }
                            }?>
                            <div class="text-center mt-4">
                                <button type="submit" class="botaoinput btn-dark" >Cadastrar</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="../js/validacao.js"></script>
</html>