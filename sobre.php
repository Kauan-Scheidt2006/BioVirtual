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
    <link rel="stylesheet" href="css/sobre.css">
    <title>BioVirtual</title>
</head>
<body>
    <?php include "menu.php";
         include "projeto.php" ?>

    <div class="container">
        
    <h1 id="marca">BioVirtual em ambiente imersivo/semi-imersivo</h1>
        <div class="row">
            <div class="col-4">
                <img src="imagens/logo.png" alt="Logo da BioVirtual" width="100%">
            </div>
            <div class="col-7">
                <img src="imagens/cena.png" alt="Cena do CoSpaces" width="80%">
            </div>
        </div>
        <div class="row">
            <div class="col-12 convite">
                <h4>
                        É um prazer recebê-lo como novo estudante em nosso projeto! Estamos animados por você ter escolhido embarcar nesta jornada educacional conosco, aqui você terá a oportunidade de expandir até seus conhecimentos, desenvolver habilidades e criar memórias duradouras. Nós sabemos que estudar dá muito trabalho!
                    Então venha aprender com esta ferramenta prática complementar ao lecionamento acadêmico.

                </h4>
            </div>
        </div>

        <div class="row">
            <div class="col-7">
                <h2 id="pergunta">Como foi Desenvolver o Projeto???</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 introducao">
                <?php introducao()?>         
            </div>
            <div class="row saida">
                <div class="col-6">
                    <h4>Com Muita Dedicação e Carinho </h4>
                    <h3 class="nomes">Nicole Rezena e Kauan Scheidt</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>