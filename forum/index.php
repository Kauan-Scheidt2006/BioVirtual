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


    $consultaCanais = "SELECT * FROM canal";
    $canais = $GLOBALS['conn']->query($consultaCanais);
    $count = 0;
    ?>
    <div class="container">
    <h1>Navegar entre os Canais</h1>
    <br><br>
    <?php
        if(isset($_POST['selecionado']))
            $_SESSION['selecionado'] = $_POST['selecionado'];

        elseif(empty($_SESSION['selecionado']))
            $_SESSION['selecionado'] = 1;
       
        while($canal = mysqli_fetch_assoc($canais)){ 
            $destaque = $_SESSION['selecionado'] == $canal['id'] ? "warning": "success";

            if($count%3 == 0)
                echo "<div class='row'>";?>

            <div class="col-3">
                <form action="" method="post">
                    <input type="hidden" name="selecionado" value="<?= $canal['id'] ?>">
                    <input type="submit" value="<?= ucfirst($canal['titulo']) ?>" class="btn btn-<?=$destaque?> btn-lg">
                </form>    
            
            </div>
    <?php
            $count++; 
            if($count%3 == 0)
                echo "</div>";
            } ?>
        <h3>Adicionar Comentário ao Canal</h3>
        <form action="mensagemFunc.php" method="post">
            <input type="hidden" name="canal_id" value="<?= $_SESSION['selecionado'] ?>">
            <textarea name="titulo" id="titulo" cols="50" rows="03"></textarea>
            <br>
            <textarea name="descricao" id="descricao" cols="50" rows="03" required></textarea>
            <input type="submit" value="Cadastrar Mensagem" class="btn btn-primary">
        </form>
        <?php          
            discorraCanal($_SESSION['selecionado']);
    ?>
    </div>
</body>
</html>