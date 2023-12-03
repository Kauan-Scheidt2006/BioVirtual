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
    ?>

    <h1>Cadastrar Novo Canal</h1>
    <form action="funcionalCanal.php" method="post">
        <input type="text" name="titulo" id="titulo" required placeholder="Título"> <br>
        <textarea name="descricao" id="descricao" cols="30" rows="10" required placeholder="Descricão"></textarea>
        <input type="submit" value="Cadastro" name="acao" class="btn btn-primary">
    </form>
</body>
</html>