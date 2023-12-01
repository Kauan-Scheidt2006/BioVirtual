<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "auxiliar.php";
    ?>
    <script src="validacoes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "menu.php" ?>
    <h1>Alteração de Dados</h1>
    <form action="funcional.php" method="post" onsubmit="return valida()">
    <input type="hidden" name="id" value="<?= $_SESSION['logado']['id'] ?>" required>
        <input type="text" name="nome" id="nome" placeholder="Nome"
        value="<?= $_SESSION['logado']['nome'] ?>" required>
        <br><br>
        <input type="text" name="apelido" id="apelido" placeholder="Apelido"
        value="<?= $_SESSION['logado']['apelido'] ?>" required>
        <br><br>
        <input type="password" name="senha" id="senha" required>
        <br>
        <input type="password" name="confirm_senha" id="confirm_senha" required>
        <br><br>
        <input type="submit" value="Atualização de Dados" name="acao">
    </form>
</body>
</html>