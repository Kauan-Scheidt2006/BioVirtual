<!DOCTYPE html>
<html lang="en">
<head>
    <script src="validacoes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['erro']['insert']))
            echo $_SESSION['erro']['insert'];
    ?>
    <form action="funcional.php" method="post" onsubmit="return valida()">
        <input type="text" name="nome" id="nome" placeholder="Nome" required>
        <br><br>
        <input type="text" name="apelido" id="apelido" placeholder="Apelido" required>
        <br><br>
        <input type="password" name="senha" id="senha" required>
        <br>
        <input type="password" name="confirm_senha" id="confirm_senha" required>
        <br><br>
        <input type="submit" value="Cadastro" name="acao">
    </form>
</body>
</html>