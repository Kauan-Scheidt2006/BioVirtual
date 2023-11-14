<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">

    <link rel="shortcut icon" href="favicon_io/favicon-96x96.png" type="image/x-icon">
    
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/home.css">
    <title>BioVirtual</title>
</head>
<body>
<?php
    include "menu.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <img src="imagens/logo.png" alt="Logo da BioVirtual" width="80%">
        </div>
        <div class="col">
            <h1 id="titulo">Seja Bem Vindo Novo Estudante</h1>        
        </div>
    </div>
    
    <div class="row play">
        <div class="col d-grid gap-2 col-4 mx-auto">
            <a class="btn btn-warning btn-lg" href="https://edu.cospaces.io/SGV-JDQ"
            target="_blank">Entrar no Ambiente Virtual</a>
        </div>
    </div>

    <div class="row">
        <div class="col-3"></div>
        <div class="col">
            <h2 id="convite">Aqui você vivenciará experiências únicas  de um aprendizado acolhedor e envolvente</h2>
        </div>
        <div class="col-3"></div>
    </div>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-5">
            <a href="http://edu.cospaces.io" target="_blank" rel="noopener noreferrer">
                <img src="imagens/cospaces.jpg" alt="Logo CoSpaces">
            </a>
            <h3 id="cospaces">Plataforma de realidade virtual educativa usada para a construção desse ambiente virtual</h3>
        </div>
        <div class="col-1"></div>
        <div class="col-4">
            <a href="http://ifc-riodosul.edu.br/" target="_blank" rel="noopener noreferrer">
                <img src="imagens/ifc.png" alt="Logo IFC">
            </a>
        </div>
    </div>
</div>
</body>
</html>