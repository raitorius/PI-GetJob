<?php
// include_once("MySQL.php");

include_once(dirname(__FILE__)."/inc/header.php");

include_once(dirname(__FILE__)."/inc/menu.php");


include_once(dirname(__FILE__)."/cad_funcoes/executacadastro.php");
include_once(dirname(__FILE__)."/functions/executaLogin.php");


?>


  <div class="container">
    <div class="row p-5 d-flex">
      <div class="col">
        <img class="img-fluid" src=" https://picsum.photos/550/700">
      </div>
      <div class="col">
        <h2>Bem Vindo</h2>
        <p>esse é o GetJob</p>
        <ul>
          <li>Cenoura</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row justify-content-center modal-dialog container">
    <div class="d-flex text-center text-white">
      <div class="mx-4 p-5 border border-primary">
        OPÇÃO
      </div>
      <div class="mx-4 px-5 border border-primary">
        OPÇÃO
      </div>
      <div class="mx-4 px-5 border border-primary">
        OPÇÃO
      </div>
    </div>
  </div>

  </section>
  <?php
  include_once(dirname(__FILE__) . "/inc/carrosel.php");
  ?>
  </div>
  <?php
  include_once(dirname(__FILE__) . "/inc/footer.php");
  ?>