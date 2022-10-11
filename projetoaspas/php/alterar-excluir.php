<?php
    include "../sql/conectamysqlcdb.php";
    session_start();

    if(!isset($_SESSION['adm'])){
        header('Location: mainpage.php');
    }
    
    $id = $_GET['id'];
    $sql3 = "SELECT * FROM servico WHERE id_servico = $id";
    $resservico = mysqli_query($mysqli, $sql3);
    $servico = mysqli_fetch_array($resservico);
    
    if(isset($_GET['excluir-servico-id'])){
        $id = $_GET['excluir-servico-id'];
        $sql = "DELETE FROM servico WHERE id_servico = $id;";
        mysqli_query($mysqli,$sql); 
        mysqli_close($mysqli);
        header('Location: perfiladm.php');
    }
?>
<html>
    <body>
        <h1>Alterar Serviço <?php echo $servico['id_servico']?></h1>
        <form action="editlog.php" method="post">
            <input type="hidden" name="operacao" value="editservico">
            <input type="hidden" name="usuario" value="adm">
            <input type="hidden" name="id" value=<?php echo $servico['id_servico']?>>
            <p>Nome <input type="text" name="nome" value=<?php echo $servico['nome']?> required></p>
            <p>Preço <input type="number" name="preco" value=<?php echo $servico['preco']?> required></p>
            <input type="submit" value="Editar">
        </form>
    </body>
</html>
