<?php
    include "auxiliar.php";
    include "canal.php";

    $titulo = isset($_POST['titulo']) ? $_POST['titulo']: "";
    isset($_POST['descricao']) ? 
    createMensagem($titulo, $_POST['descricao'], date("d-m-Y"), $_POST['canal_id'], $_SESSION['logado']['id']) : "";
            