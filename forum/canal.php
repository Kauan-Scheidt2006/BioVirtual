<?php


function discorraCanal($id){
    $consultaMensagens = "SELECT mensagem.id, mensagem.titulo, mensagem.descricao, mensagem.criado_em, mensagem.usuario_id
    FROM mensagem WHERE mensagem.canal_id = '$id'";
    $mensagens = $GLOBALS['conn']->query($consultaMensagens);
    $count = 0;

    while($mensagem = mysqli_fetch_array($mensagens)){
            
        $consultaUsuario = "SELECT * FROM usuario WHERE id = {$mensagem['usuario_id']}";
        $usuario = mysqli_fetch_array($GLOBALS['conn']->query($consultaUsuario));

        if($count%3 == 0)
            echo "<div class='row'>";?>
        <div class="col-1"></div>
        <div class="col-3">
            <h2>Postado por <?= mb_strtoupper($usuario['apelido'])?></h2>
            <h2><b><?= $mensagem['titulo'] ?></b></h2> 
            <h5><?=$mensagem['descricao']?> </h5>
            <p><?=$mensagem['criado_em']?> </p>
                   
        </div>
<?php
        $count++; 
        if($count%3 == 0)
            echo "</div> <br><br><br>";

    }
}


function createMensagem($titulo, $descricao, $data, $canal_id, $usuario_id){
    $sql = "INSERT INTO mensagem (titulo, descricao, criado_em, canal_id, usuario_id) 
    VALUES ('$titulo', '$descricao', '$data', '$canal_id', '$usuario_id')";

    $GLOBALS['conn']->query($sql);

    header("Location: index.php");
}