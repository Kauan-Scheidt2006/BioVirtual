<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "auxiliar.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include "menu.php";
        include "canal.php";
    
        if(isset($_POST['selecionado']))
            $_SESSION['selecionado'] = $_POST['selecionado'];

        elseif(empty($_SESSION['selecionado']))
            $_SESSION['selecionado'] = 1;
       

        $consultaCanais = "SELECT * FROM canal";
        $canais = $GLOBALS['conn']->query($consultaCanais);
        $count = 0;
    ?>
    <div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Navegar entre os Canais</h1>
        </div>
        <div class="col">
            <a href="cadCanal.php" class="btn btn-secondary">Cadastrar Novo Canal</a>
        </div>
        <div class="col">
            <form action="funcCanal.php" method="post">
                <input type="hidden" name="idCanal" value="<?= $_SESSION['selecionado'] ?>" required>
                <input type="submit" value="Alterar Informação de Canal" class="btn btn-warning">
            </form>
        </div>
        <div class="col">
            <form action="funcionalCanal.php" method="post">
                <input type="hidden" name="idCanal" value="<?= $_SESSION['selecionado'] ?>" required>
                <input type="submit" value="Deletar Canal" class="btn btn-danger" name="acao">
            </form>
        </div>
    </div>
    <br><br>
    <?php
        while($canal = mysqli_fetch_assoc($canais)){ 
            $destaque = $_SESSION['selecionado'] == $canal['id'] ? "warning": "success";

            if($count%3 == 0)
                echo "<div class='row'> <br><br>";?>

            <div class="col-3">
                <form action="" method="post">
                    <input type="hidden" name="selecionado" value="<?= $canal['id'] ?>">
                    <input type="submit" value="<?= ucfirst($canal['titulo']) ?>" class="btn btn-<?=$destaque?> btn-lg">
                </form>    
            
            </div>
    <?php
            $count++; 
            if($count%3 == 0)
                echo "</div> <br><br>";
            } ?>
            <br><br><br>
        <h3>Adicionar Comentário ao Canal</h3>
        <form action="mensagemFunc.php" method="post">
            <input type="hidden" name="canal_id" value="<?= $_SESSION['selecionado'] ?>">
            <textarea name="titulo" id="titulo" cols="50" rows="03" placeholder="Título da Mensagem"></textarea>
            <br>
            <textarea name="descricao" id="descricao" cols="50" rows="03" required
            placeholder="Conteúdo da Mensagem"></textarea>

            <input type="submit" value="Cadastrar Mensagem" class="btn btn-primary">
        </form>
        <?php          
            discorraCanal($_SESSION['selecionado']);
    ?>
    </div>
</body>
</html>