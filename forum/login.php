<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        
        if(isset($_SESSION['erro']['logar'])) 
            echo $_SESSION['erro']['logar'];
    ?>
    <form action="funcional.php" method="post">
        <input type="text" name="apelido" id="apelido" required>

        <input type="password" name="senha" id="senha" required>

        <input type="submit" value="Login" name="acao">
    </form>
</body>
</html>