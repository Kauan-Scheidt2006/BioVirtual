<?php
include "funcCanal.php";

if(empty($_POST['acao']) ){
    header('Location: index.php');
    exit;
}


$func = $_POST['acao'];

switch($func){
    case 'Cadastro':
        createCanal($_POST['titulo'], $_POST['descricao']);
        break;

    case "Deletar Canal":
        deleteCanal($_POST['idCanal']);
        break;

    case "Alterar Informação de Canal":
        updateCanal($_POST['idCanal'], $_POST['titulo'], $_POST['descricao']);
        break;


    default:
        logout();
}