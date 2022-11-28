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
    <div class="card" style="width: 28%; height: 60%; margin-left: 35%; margin-top: 7%; border-radius: 6%;">
        <div class="card-header border-0" style="background-color: black; border-radius: 6%;">
            <h5 class="modal-title ms-auto" id="TituloModal">RECUPERAR CONTA</h5>
        </div>
        <div class="card-body">
            <div>
                Digite seu email:
            </div>
            <form action="envia-codrec">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" id="emailrec" name="emailrec" placeholder="Email" required>
                    <div class="invalid-feedback">
                        Por favor, preencha seu email.
                    </div>
                </div>
            </form>
            <button type="submit" class="botaoinput btn-dark">Enviar código para recuperação</button>
        </div>
        <div class="card-footer">
            <a href="mainpage.php">Voltar</a>
        </div>
    </div>
    </body>
</html>