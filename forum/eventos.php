<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Ações/Eventos Realizados desde que Loguei no Brwoser
</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Veja abaixo as ações feitas, em verde foram executadas com êxito e 
      em vermelho enfrentamos problemas, no qual, não foi possível completar a operação!!!
    </div>
    <ul>
        <?php
            if(isset($_SESSION['operacoes'])){
                foreach($_SESSION['operacoes'] as $atividade){ ?>
            <li><?= $atividade ?></li>

        <?php }; 
        }
        else {?> <br><br><h3>Nenhuma Atividade Recente</h3> <?php } ?>
    </ul>
  </div>
</div>