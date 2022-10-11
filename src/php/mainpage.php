<!DOCTYPE html>
<?php session_start() ?>
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
        <nav class="navbar sticky-top navbar-expand-md navbar-dark border-bottom border-3" id="navbar-preta">
            <div class="container-fluid">
                
                <a href="" class="navbar-brand"> 
                    <img src="../imgs/logocdb.ico"  alt="Logo" height="70" class="d-inline-block">
                </a>

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav-target">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="d-none d-md-inline">
                    <p><a href="" class="brand">CAVANHAQUE DE BODE</a></p>
                </div>
                
                <div class="collapse navbar-collapse" id="nav-target">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <?php if(isset($_SESSION['cliente']) || isset($_SESSION['funcionario']) || isset($_SESSION['adm'])){
                                echo "<a class='nav-link' href='perfilredirect.php'>
                                <i class='mt-3 fas fa-user fa-xl'></i>
                                </a>";
                            } else{
                                echo "<a class='nav-link dropdown-toggle' href=' role='button' data-bs-toggle='dropdown'>
                                    <i class='mt-3 fa-regular fa-user fa-xl'></i>
                                </a>
                                <div class='dropdown-menu'>
                                    <button type='button' class='botaoentrar btn-dark' data-bs-toggle='modal' data-bs-target='#modallogin'>
                                        Entrar
                                    </button>
                                    <div class='dropdown-divider'></div>
                                    <a class='dropdown-item' data-bs-toggle='modal' data-bs-target='#modalcadastro'>Cliente novo? Cadastre-se</a>
                                </div>";
                            }?>
                        </li>    
                        <li class="nav-item divisorinvisivel d-none d-md-inline"></li>
                        <li class="nav-item">
                            <a href="" class="linknav nav-link" > SERVIÇOS</a>
                        </li>
                        <li class="nav-item divisor d-none d-md-inline"></li>
                        <li class="nav-item">
                            <a href="" class="linknav nav-link"> CONTATO</a>
                        </li>
                        <li class="nav-item divisor d-none d-md-inline"></li>
                        <li class="nav-item">
                            <a href="" class="linknav nav-link"> SOBRE </a>
                        </li>
                        <li class="nav-item divisor d-none d-md-inline"></li>
                        <li class="nav-item">
                            <a href="" class="linknav nav-link"> AGENDAMENTO </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="modal fade" id="modallogin" tabindex="-1" aria-labelledby="modalloginlabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header border-0" style="background-color: black;">
                    <h5 class="modal-title ms-auto" id="TituloModal">LOGIN</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"  aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="registerlog.php" method="POST" class="needs-validation" novalidate>
                        <input type="hidden" name="operacao" value="login">
                        <div class="form-row">
                          <div class="form-group col">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" id="emaillogin" name="emaillogin" placeholder="Email" required>
                                <div class="invalid-feedback">
                                    Por favor, preencha seu email.
                                </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group mt-3">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="senhalogin" name="senhalogin" placeholder="Senha" required>
                                <span class="input-group-text" onclick="passwordlogin_show_hide();">
                                <i class="fas fa-eye" id="show_eye"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                </span> 
                                <div class="invalid-feedback">
                                    Por favor, preencha sua senha corretamente.
                                </div>
                            </div>
                        </div>
                        </div>
                        <?php if(isset($_SESSION['na-login'])){
                            echo "<div class='alert alert-danger mt-3' id='alert' class='mr-auto'>Login inválido.</div>";
                        }?>
                        <div class="text-center mt-4">
                            <button type="submit" class="botaoinput btn-dark">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-3">
                    <p class="font-small grey-text justify-content-end"> Cliente novo?<a href="#" class="blue-text" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalcadastro">
                        Cadastre-se</a>
                    </p>
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="modalcadastro" tabindex="-1" aria-labelledby="modalcadastrolabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header border-0" style="background-color: black;">
                    <h5 class="modal-title ms-auto" id="TituloModal">CADASTRE-SE</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="registerlog.php" method="POST" class="needs-validation" novalidate>
                        <input type="hidden" name="operacao" value="cadastro">
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
                                    <input type="email" class="form-control" id="emailcadastro" name="emailcadastro" placeholder="Email" required>
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
                                <input type="password" class="form-control" id="senhacadastro" name="senhacadastro" placeholder="Senha" pattern=".{6,}" required>
                                <span class="input-group-text" onclick="passwordregister_show_hide();">
                                <i class="fas fa-eye" id="show_eye2"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye2"></i>
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
                                <span class="input-group-text" onclick="passwordregister2_show_hide();">
                                <i class="fas fa-eye" id="show_eye3"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye3"></i>
                                </span>
                                <div class="invalid-feedback">
                                    Por favor, preencha este campo (A senha deve conter no minimo 6 caracteres).
                                </div>
                            </div>
                          </div>
                        </div>
                        <?php if(isset($_SESSION['na-cadastro'])){
                            switch($_SESSION['na-cadastro']){
                                case "cadastro":
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
                <div class="modal-footer border-3">
                    <p class="font-small grey-text justify-content-end"> Já possui uma conta?<a href="#" class="blue-text" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modallogin">
                        Entre aqui</a>
                    </p>
                </div>
            </div>
            </div>
        </div>
        
        <?php if(isset($_SESSION['na-login'])){
            echo "<script> var modallogin = new bootstrap.Modal(document.getElementById('modallogin'));
                    modallogin.show();
            </script>";
            unset($_SESSION['na-login']);
        }
        ?>
        <?php if(isset($_SESSION['na-cadastro'])){
            echo "<script> var modalcadastro = new bootstrap.Modal(document.getElementById('modalcadastro'));
                    modalcadastro.show();
            </script>";
            unset($_SESSION['na-cadastro']);
        }
        ?>
        <script src="../js/validacao.js"></script>
    </body>
</html>