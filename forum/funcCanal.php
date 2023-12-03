<?php
session_start();
$GLOBALS['conn'] = new mysqli('localhost', 'root', "", 'Biovirtual');

function createCanal($titulo, $descricao){
    $data = date('d-m-Y');
    $sql = "INSERT INTO canal (titulo, descricao, criado_em) VALUES ('$titulo', '$descricao', '$data')";
    $GLOBALS['conn']->query($sql);

    $_SESSION['operacoes'][] = "Canal Criado Com Sucesso";
    header('Location: index.php');
}

function deleteCanal($idCanal){
    $sql = "DELETE FROM mensagem WHERE canal_id = '$idCanal'";
    $GLOBALS['conn']->query($sql);

    $sql = "DELETE FROM canal WHERE id = '$idCanal'";
    $GLOBALS['conn']->query($sql);
    
    $sql = "SELECT id FROM canal LIMIT 1";
    $_SESSION['selecionado'] = mysqli_fetch_assoc($GLOBALS['conn']->query($sql))['id'];
    
    $_SESSION['operacoes'][] = "Canal Deletado Com Sucesso";
    header('Location: index.php');
    
}

function updateCanal($idCanal, $titulo, $descricao){
    $sql = "UPDATE canal SET titulo = '$titulo', descricao = '$descricao' WHERE canal.id = '$idCanal'";

    $GLOBALS['conn']->query($sql);

    $_SESSION['operacoes'][] = "Canal Deletado Com Sucesso";
    header('Location: index.php');
}
