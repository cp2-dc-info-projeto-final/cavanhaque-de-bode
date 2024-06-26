<?php
    session_start();
    include "../sql/conectamysqlcdb.php";
    if(!isset($_SESSION['cliente'])){
        header('Location: mainpage.php');
    }
    
    $id = $_SESSION['cliente'];
    $sql1 = "SELECT nome, email, senha FROM cliente WHERE id_cliente ='$id'";
    $rescliente = mysqli_query($mysqli, $sql1);
    $cliente = mysqli_fetch_array($rescliente);
    
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
                        <span class="fs-4 fontecdb d-none d-md-inline-block">Meu Perfil</span>
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
                    <li>
                        <a href="#alterardados" class="nav-link text-white">
                            <i class="fa-solid fa-pen fa-lg me-2" ></i>
                            <span class="fs-6 d-none d-md-inline-block">Editar Conta</span>
                        </a>
                    </li>
                    <hr class="d-sm-block d-md-none">
                    <li>
                        <a href="#excluirdados" class="nav-link text-white">
                            <i class="fa-solid fa-trash-can fa-lg me-2" ></i>
                            <span class="fs-6 d-none d-md-inline-block"> Excluir conta</span>
                        </a>
                    </li>
                    <hr class="d-sm-block d-md-none">
                    <li>
                        <a href="#agendamentos" class="nav-link text-white">
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
                        echo "<p>Nome: ".$cliente["nome"]."</p>";
                        echo "<p>Email: ".$cliente["email"]."</p>";
                    ?>
                </div>
                <div class="container border border-dark mt-5" id="alterardados">
                    <p class="fs-2">Editar Dados</p>
                    <form action="editlog.php" method="POST" class="needs-validation" novalidate>
                        <input type="hidden" name="operacao" value="alterar">
                        <input type="hidden" name="usuario" value="cliente">
                        <div class="form-row">
                            <div class="form-group col">
                                <div class="input-group mt-2">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo$cliente['nome'];?>" required>
                                    <div class="invalid-feedback">
                                        Por favor, preencha este campo.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col">
                                <div class="input-group mt-4">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="emailalterar" name="emailalterar" value="<?php echo$cliente['email'];?>" required>
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
                                <input type="password" class="form-control" id="senhaalterar" name="senhaalterar" placeholder="Senha" required>
                                <span class="input-group-text" onclick="passwordedit_show_hide();">
                                <i class="fas fa-eye" id="show_eye4"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye4"></i>
                                </span> 
                                <div class="invalid-feedback">
                                    Por favor, preencha este campo (A senha deve conter no minimo 6 caracteres).
                                </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="input-group mt-4">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="confirmasenhaalterar" name="confirmasenhaalterar" placeholder="Confirme a senha" required>
                                <span class="input-group-text" onclick="passwordedit2_show_hide();">
                                <i class="fas fa-eye" id="show_eye5"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye5"></i>
                                </span>
                                <div class="invalid-feedback">
                                    Por favor, preencha este campo (A senha deve conter no minimo 6 caracteres).
                                </div>
                            </div>
                          </div>
                        </div>
                        <?php if(isset($_SESSION['na-alterar'])){
                            switch($_SESSION['na-alterar']){
                                case "alterar":
                                    echo "<div class='alert alert-danger mt-3' id='alert' class='justify-content-center'>Este endereço de email já esta sendo utilizado.</div>";
                                    break;
                                case "email";
                                    echo "<div class='alert alert-danger mt-3' id='alert' class='mr-auto'>Digite seu email corretamente.</div>";
                                    break;
                                case "senhas";    
                                    echo "<div class='alert alert-danger mt-3' id='alert' class='mr-auto'>Senha incorreta.</div>";
                                    break;
                                case "vazio";    
                                    echo "<div class='alert alert-danger mt-3' id='alert' class='mr-auto'>Preencha todos os campos.</div>";
                                    break;
                                }
                        }?>
                        <div class="text-center mt-4">
                            <button type="submit" class="botaoinput btn-dark" >Alterar</button>
                        </div>
                    </form>
                </div>
                <div class="container border border-dark mt-5" id="excluirdados">
                    <p class="fs-2">Excluir Dados</p>
                    <form action="editlog.php" method="POST" class="needs-validation" novalidate>
                            <input type="hidden" name="operacao" value="excluir">
                            <input type="hidden" name="usuario" value="cliente">
                            <div class="row">
                            <div class="col-6">
                                <div class="input-group mt-4">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="senhaexcluir" name="senhaexcluir" placeholder="Senha" required>
                                    <span class="input-group-text" onclick="passworddelete_show_hide();">
                                    <i class="fas fa-eye" id="show_eye6"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye6"></i>
                                    </span> 
                                    <div class="invalid-feedback">
                                        Por favor, preencha este campo (A senha deve conter no minimo 6 caracteres).
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group mt-4">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="confirmasenhaexcluir" name="confirmasenhaexcluir" placeholder="Confirme a senha" required>
                                    <span class="input-group-text" onclick="passworddelete2_show_hide()">
                                    <i class="fas fa-eye" id="olho1"></i>
                                    <i class="fas fa-eye-slash d-none" id="olho2"></i>
                                    </span>
                                    <div class="invalid-feedback">
                                        Por favor, preencha este campo (A senha deve conter no minimo 6 caracteres).
                                    </div>
                                </div>
                            </div>
                            </div>
                            <?php if(isset($_SESSION['na-excluir'])){
                                switch($_SESSION['na-excluir']){
                                    case "senhas";    
                                        echo "<div class='alert alert-danger mt-3' id='alert' class='mr-auto'>Verifique se as senhas são iguais.</div>";
                                        break;
                                    case "vazio";    
                                        echo "<div class='alert alert-danger mt-3' id='alert' class='mr-auto'>Preencha todos os campos.</div>";
                                        break;
                                    }
                            }?>
                            <div class="text-center mt-4">
                                <button type="submit" class="botaoinput btn-dark" >Excluir</button>
                            </div>
                        </form>
                    </div>
                    <div class="container border border-dark mt-5" id="agendamentos">
                        <p class="fs-2">Meus Agendamentos</p>
                        <?php
                            $sql = "SELECT * FROM agendamento WHERE id_cliente LIKE $id;";
                            $res = mysqli_query($mysqli, $sql);
                            $linhas = mysqli_num_rows($res);

                            for($i=0; $i < $linhas; $i++){
                                $agendamento = mysqli_fetch_array($res);
                                $idfun = $agendamento['id_funcionario'];
                                $idser = $agendamento['id_servico'];
                                
                                $hora = date('H:i', strtotime($agendamento['horario']));
                                $data = str_replace('-', '/', $agendamento['data_agendamento']); 
                                $data = date('d/m/Y', strtotime($agendamento['data_agendamento']));
                                
                                
                                $sql2 = "SELECT * FROM funcionario WHERE id_funcionario LIKE $idfun;";
                                $res2 = mysqli_query($mysqli, $sql2);
                                $array = mysqli_fetch_array($res2);
                                $funcionario = $array['nome'];

                                $sql3 = "SELECT * FROM servico WHERE id_servico LIKE $idser";
                                $res3 = mysqli_query($mysqli, $sql3);
                                $array2 = mysqli_fetch_array($res3);
                                $servico = $array2['nome'];

                                echo "Data: ". $data ."<br>";
                                echo "Horario: ". $hora."<br>";
                                echo "Servico: ".$servico."<br>";
                                echo "Funcionário: ".$funcionario."<br>";
                                echo "------------------------------------------------------<br>";
                            } 

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="../js/validacao.js"></script>
</html>
            