<?php
session_start();
$GLOBALS['conn'] = new mysqli('localhost', 'root', "", 'Biovirtual');

    

function create($apelido, $nome, $senha){
    $sql = "INSERT INTO usuario (apelido, nome, senha) VALUES ('$apelido', '$nome', '$senha')";

    $GLOBALS['conn']->query($sql);

    $usuario = ["apelido"=>$apelido, "nome"=>$nome, "senha"=>$senha];

    $_SESSION['logado'] = $usuario;
    header('Location: index.php');
}

function valida($apelido, $senha){
    $sql = "SELECT * FROM usuario WHERE apelido = '$apelido' AND senha = '$senha'";

    $resul = $GLOBALS['conn']->query($sql);

    $usuario = mysqli_fetch_array($resul);

    if(isset($usuario))
        $_SESSION['logado'] = $usuario;
        
    header('Location: index.php');
    exit;    

}


function update($id, $apelido, $nome, $senha){
    $sql = "UPDATE usuario SET apelido = '$apelido', nome = '$nome', senha = '$senha'
     WHERE usuario.id = $id ";

     $GLOBALS['conn']->query($sql);

     header('Location: index.php');
}