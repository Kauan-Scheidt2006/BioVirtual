<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logoBioVirtual.png" type="image/x-icon">
    <link rel="stylesheet" href="css/sobre.css">
    <title>Bio Virtual</title>
</head>

<body>
    <?php include "menu.php" ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h1 style="color:#3A8E06;" id="titulo"><b>BioVirtual em ambiente imersivo/semi-imersivo</b></h1>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col-12"><img src="img/cena.png" alt="" width="50%"></div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center" id="texto">
                <h4>É um prazer recebê-lo como novo estudante em nosso projeto! Estamos animados por você ter escolhido embarcar nesta jornada educacional conosco, aqui você terá a oportunidade de expandir até seus conhecimentos, desenvolver habilidades e criar memórias duradouras. Nós sabemos que estudar dá muito trabalho!
                    Então venha aprender com esta ferramenta prática complementar ao lecionamento acadêmico.</h4>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-7">
                <h2 id="texto" style="color: #3A8E06;"><b>Como foi Desenvolver o Projeto??? </b></h2>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 introducao">
                <?php include "projeto.php";
                introducao() ?>
            </div>
            <div class="row saida mt-5">
                <div class="col-6">
                    <h4 id="texto"><b>Com Muita Dedicação e Carinho</b> </h4>
                    <h3 id="nomes">Nicole Rezena e Kauan Scheidt</h3>
                </div>
            </div>

            <h5 id="nomes">
                <div class="row mt-3" >
                    <div class="col-3">
                        <b> Orientador (a):</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"> Juliano Tonizetti Brignoli
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3"> <b>Coorientadores(as):</b>
                        </div>
                </div>
                <div class="row">
                    <div class="col-3">Aliane Loureiro Krassmann</div>
                </div>
                <div class="row">
                    <div class="col-3 mb-5">
                    Marja Zattoni Milano
                    </div>
                </div>
            </h5>
        </div>

    </div>
</body>

</html>