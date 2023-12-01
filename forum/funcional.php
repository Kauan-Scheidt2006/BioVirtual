<?php

include "func.php";

if(empty($_POST['acao']) ){
    header('Location: index.php');
    exit;
}


$func = $_POST['acao'];
$apelido = isset($_POST['apelido']) ? $_POST['apelido']: exit;
$senha = isset($_POST['senha']) ? sha1($_POST['senha']): exit;


switch($func){
    case 'Cadastro':
        $nome = isset($_POST['nome']) ? $_POST['nome']: exit;
        $confirm_senha = sha1($_POST['senha']) == sha1($_POST['confirm_senha']) ? $_POST['confirm_senha']: exit;
        create($apelido, $nome, $senha);
        break;

    case 'Login':
        valida($apelido, $senha);
        break;

    case "Atualização de Dados":
        $id = isset($_POST['id']) ? $_POST['id']: exit;
        $nome = isset($_POST['nome']) ? $_POST['nome']: exit;
        $confirm_senha = sha1($_POST['senha']) == sha1($_POST['confirm_senha']) ? $_POST['confirm_senha']: exit;
        update($id, $apelido, $nome, $senha);
}