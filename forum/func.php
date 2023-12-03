<?php
session_start();
$GLOBALS['conn'] = new mysqli('localhost', 'root', "", 'Biovirtual');

    

function create($apelido, $nome, $senha){
    $sql = "SELECT usuario.apelido FROM usuario WHERE apelido = '$apelido'";
    $resul = mysqli_fetch_array($GLOBALS['conn']->query($sql));
    
    if(isset($resul['apelido'])){
        $_SESSION['erro']['insert'] = "Apelido já Cadastrado, Use Outro";

        header('Location: cadastro.php');
        exit;
    }
    else{
    $data = date("d-m-Y");
    $sql = "INSERT INTO usuario (apelido, nome, senha, criado_em) VALUES ('$apelido', '$nome', '$senha', '$data')";

    $GLOBALS['conn']->query($sql);

    
    $_SESSION['operacoes'][] = "Usuário Cadastrado Com Sucesso";
    header('Location: index.php');}

    valida($apelido, $senha);
}

function valida($apelido, $senha){
    $sql = "SELECT * FROM usuario WHERE apelido = '$apelido' AND senha = '$senha'";

    $resul = $GLOBALS['conn']->query($sql);

    $usuario = mysqli_fetch_array($resul);

    if(isset($usuario)){
        $_SESSION['logado'] = $usuario;
        
        $_SESSION['operacoes'][] = "Usuário Logado com Sucesso";
        header('Location: index.php');
    }
        
    else{
        $_SESSION['erro']['logar'] = "Usuário ou Senha Não Foram Cadastradas";
        header('Location: login.php');
    }
}


function update($id, $apelido, $nome, $senha){
    $data = date('d-m-Y');
    $sql = "UPDATE usuario SET apelido = '$apelido', nome = '$nome', senha = '$senha', atualizado_em = '$data'
     WHERE usuario.id = $id ";

     $GLOBALS['conn']->query($sql);

     
     $_SESSION['operacoes'][] = "Usuário AAlterado Com Sucesso";
     header('Location: index.php');
}