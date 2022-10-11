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
                <div class="d-flex flex-column text-white min-vh-100 sticky-top">
                    <a href="" class="align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <i class="fas fa-user fa-xl ms-3 me-3 d-none d-md-inline-block"></i>
                        <span class="fs-4 fontecdb d-none d-md-inline-block">Administrador</span>
                    </a>
                    <hr class="d-none d-md-inline-block">
                    <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#dados" class="nav-link text-white" aria-current="page">
                            <i class="fa-solid fa-clipboard fa-lg me-2" ></i>
                            <span class="fs-6 d-none d-md-inline-block"> Meus dados</span>
                        </a>
                    </li>
                    <hr class="d-sm-block d-md-none">
                    <hr class="d-none d-md-block">
                    <li> 
                        <a href="#clientes" class="nav-link text-white" aria-current="page">
                            <i class="fa-solid fa-users fa-lg me-2" ></i>
                            <span class="fs-6 d-none d-md-inline-block">Clientes</span>
                        </a>
                    </li>
                    <hr class="d-sm-block d-md-none">
                    <hr class="d-none d-md-block">
                    <li>
                        <a href="#funcionarios" class="nav-link text-white">
                            <i class="fa-solid fa-person fa-lg me-2" ></i>
                            <span class="fs-6 d-none d-md-inline-block">Funcionarios</span>
                        </a>
                    </li>
                    <hr class="d-sm-block d-md-none">
                    <hr class="d-none d-md-block">
                    <li>
                        <a href="#servicos" class="nav-link text-white">
                            <i class="fa-solid fa-money-bill fa-lg me-2" ></i>
                            <span class="fs-6 d-none d-md-inline-block">Serviços</span>
                        </a>
                    </li>
                    <hr class="d-sm-block d-md-none">
                    <hr class="d-none d-md-block">
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
                    <p class="fs-2">Clientes cadastrados</p>
                    <p>------------------------------------------------------</p>
                    <?php
                        $sql1 = "SELECT * FROM cliente;";
                        $rescliente = mysqli_query($mysqli, $sql1);
                        $linhascliente = mysqli_num_rows($rescliente);
                        for($i=0; $i < $linhascliente; $i++){
                            $cliente = mysqli_fetch_array($rescliente);
                            echo "<p class='fs-4'>Cliente ".$cliente['id_cliente']."</p>";
                            echo "Nome: ".$cliente["nome"]."<br>";
                            echo "Email: ".$cliente["email"]."<br>";
                            echo "------------------------------------------------------<br>";
                           }                         
                    ?>
                </div>
                <div class="col py-3">
                    <div class="container border border-dark" id="dados">
                    <p class="fs-2">Cadastrar cliente</p>
                    <form action="editlog.php" method="POST" class="needs-validation" novalidate>
                        <input type="hidden" name="operacao" value="cadastrocliente">
                        <div class="form-row">
                            <div class="form-group col">
                                <div class="input-group mt-2">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                                    <div class="invalid-feedback">
                                        Por favor, preencha este campo.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col">
                                <div class="input-group mt-4">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="emailcadastrocliente" name="emailcadastrocliente" placeholder="Email" required>
                                    <div class="invalid-feedback">
                                        Por favor, preencha seu email.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <div class="input-group mt-4">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="senhacadastrocliente" name="senhacadastrocliente" placeholder="Senha" pattern=".{6,}" required>
                                </span> 
                                <div class="invalid-feedback">
                                    Por favor, preencha este campo (A senha deve conter no minimo 6 caracteres).
                                </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="input-group mt-4">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="confirmasenha" name="confirmasenha" placeholder="Confirme a senha" pattern=".{6,}" required>
                                </span>
                                <div class="invalid-feedback">
                                    Por favor, preencha este campo (A senha deve conter no minimo 6 caracteres).
                                </div>
                            </div>
                          </div>
                        </div>
                        <?php if(isset($_SESSION['na-cadastrocliente'])){
                            switch($_SESSION['na-cadastrocliente']){
                                case "cadastrocliente":
                                    echo "<div class='alert alert-danger mt-3' id='alert' class='justify-content-center'>Este endereço de email já esta sendo utiizado.</div>";
                                    break;
                                case "email";
                                    echo "<div class='alert alert-danger mt-3' id='alert' class='mr-auto'>Digite seu email corretamente.</div>";
                                    break;
                                case "senhas";    
                                    echo "<div class='alert alert-danger mt-3' id='alert' class='mr-auto'>Verifique se as senhas são iguais.</div>";
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
                <div class="col py-3">
                <div class="container border border-dark" id="funcionarios">
                    <p class="fs-2">Funcionario cadastrados</p>
                    <p>------------------------------------------------------</p>
                    <?php
                        $sql2 = "SELECT * FROM funcionario";
                        $resfuncionario = mysqli_query($mysqli, $sql2);
                        $linhasfuncionario = mysqli_num_rows($resfuncionario);

                        for($i=0; $i < $linhasfuncionario; $i++){
                            $funcionario = mysqli_fetch_array($resfuncionario);
                            echo "<p class='fs-4'>funcionario ".$funcionario['id_funcionario']."</p>";
                            echo "Nome: ".$funcionario["nome"]."<br>";
                            echo "Email: ".$funcionario["email"]."<br>";
                            echo "------------------------------------------------------<br>";
                           }                          
                    ?>
                </div>
                <div class="col py-3">
                    <div class="container border border-dark">
                    <p class="fs-2">Cadastrar funcionario</p>
                    <form action="editlog.php" method="POST" class="needs-validation" novalidate>
                        <input type="hidden" name="operacao" value="cadastrofuncionario">
                        <div class="form-row">
                            <div class="form-group col">
                                <div class="input-group mt-2">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                                    <div class="invalid-feedback">
                                        Por favor, preencha este campo.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col">
                                <div class="input-group mt-4">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="emailcadastrofuncionario" name="emailcadastrofuncionario" placeholder="Email" required>
                                    <div class="invalid-feedback">
                                        Por favor, preencha seu email.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-6">
                            <div class="input-group mt-4">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="senhacadastrofuncionario" name="senhacadastrofuncionario" placeholder="Senha" pattern=".{6,}" required>
                                </span> 
                                <div class="invalid-feedback">
                                    Por favor, preencha este campo (A senha deve conter no minimo 6 caracteres).
                                </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="input-group mt-4">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="confirmasenha" name="confirmasenha" placeholder="Confirme a senha" pattern=".{6,}" required>
                                </span>
                                <div class="invalid-feedback">
                                    Por favor, preencha este campo (A senha deve conter no minimo 6 caracteres).
                                </div>
                            </div>
                          </div>
                        </div>
                        <?php if(isset($_SESSION['na-cadastrofuncionario'])){
                            switch($_SESSION['na-cadastrofuncionario']){
                                case "cadastrofuncionario":
                                    echo "<div class='alert alert-danger mt-3' id='alert' class='justify-content-center'>Este endereço de email já esta sendo utiizado.</div>";
                                    break;
                                case "email";
                                    echo "<div class='alert alert-danger mt-3' id='alert' class='mr-auto'>Digite seu email corretamente.</div>";
                                    break;
                                case "senhas";    
                                    echo "<div class='alert alert-danger mt-3' id='alert' class='mr-auto'>Verifique se as senhas são iguais.</div>";
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
                <div class="col py-3">
                <div class="container border border-dark" id="servicos">
                    <p class="fs-2">Serviços cadastrados</p>
                    <p>------------------------------------------------------</p>
                    <?php
                        $sql3 = "SELECT * FROM servico;";
                        $resservico = mysqli_query($mysqli, $sql3);
                        $linhasservico = mysqli_num_rows($resservico);
                        for($i=0; $i < $linhasservico; $i++){
                            $servico = mysqli_fetch_array($resservico);
                            echo "<p class='fs-4'>servico ".$servico['id_servico']."</p>";
                            echo "Nome: ".$servico["nome"]."<br>";
                            echo "Preço: R$".$servico["preco"]."<br>";
                            echo "<a href='alterar-excluir.php?id=".$servico['id_servico']."'>Editar </a>";
                            echo "<a href='alterar-excluir.php?excluir-servico-id=".$servico['id_servico']."'>&nbsp Excluir</a><br><input type='hidden' name='operacao' value='excluir'>";
                            echo "------------------------------------------------------<br>";
                           }                    
                    ?>
                </div>
                <div class="col py-3">
                <div class="container border border-dark">
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
        <div class="collapse" id="editarcliente">
            <div class="card card-body">
                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
        </div>
    </body>
    <?php 
        unset($_SESSION['na-servicos']);
        unset($_SESSION['na-cadastrofuncionario']);
        unset($_SESSION['na-cadastrocliente']);
    ?>
    <script src="../js/validacao.js"></script>
</html>