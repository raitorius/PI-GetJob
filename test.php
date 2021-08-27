<?php
// include_once("MySQL.php");

include_once("./inc/header.php");

include_once("./inc/menu.php")
?>
<br>
<br>
<br>
<div class="row justify-content-center modal-dialog container">
  <div class="d-flex text-center text-white">
    <div class="lala mx-5 p-5 border border-#000000">
      Faça seus pedidos
    </div>
    <div class="lala mx-5 p-5 border border-#000000">
      Pesquise o melhor preço
    </div>
    <div class="lala mx-5 p-5 border border-#000000">
      Garanta o melhor
    </div>

    <div class="lala mx-5 p-5 border border-#000000">
      Todos os tipos de serviços
    </div>
  </div>
</div>
<br>
<h1 class="teste">Os mais solicitados no GetJob</h1>
<?php


include_once(dirname(__FILE__) . "./inc/carrosel.php");
?>

<br>
<div class="container">
  <div class="teste">
    <div class="col col-12">
      <h5>O que é a GetJob?</h5>
      <p>Um site focado em ajudar na divulgação de serviços autonomos!</p>
      <img src="assets/img/user.png">
      <p>Faça seu cadastro no site e fique conectado com os melhores serviços</p>
      <img src="assets/img/icon.png">
      <p>Cadastre seus serviços e espere as propostas chegarem em seu e-mail</p>
      <img src="assets/img/house.png">
      <p>Trabalhos na porta de sua casa</p>
      <h5>É simples, basta se cadastrar e fazer login</h5>


      

    </div>
  </div>
</div>



<?php
include_once(dirname(__FILE__) . "./inc/footer.php");
?>