<?php
    if(isset($_GET['logout'])){      
        logout();}
        
        ?>

<a href="index.php">Principal</a> <br>
<a href="atualiza.php">Alteração de Dados</a> <br>
<a href="perfil.php">Perfil Pessoal</a> <br>
<a href="?logout">Logout</a>


<br><br><br>

<h1>Seja Bem Vindo <?= strtoupper($_SESSION['logado']['nome']) ?></h1>

<h2>Compartilhe experiências incríveis <?=ucfirst($_SESSION['logado']['apelido'])?></h2>
