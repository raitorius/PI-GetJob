<?php
include_once(dirname(__FILE__) . "/inc/MySQL.php");

include_once(dirname(__FILE__) . "./inc/header.php");

?>
<?php

include_once(dirname(__FILE__) . "./inc/menu.php");

?>

<h1>Serviços cadastrados no GetJob:</h1>

<style>
  h1{
    text-align: center;
  }
  body {
    background: white;
    border-radius: 4px;
  }

  .row.test {
    border-radius: 6px;
    background: linear-gradient(45deg, #ffffff, #C0C0C0, rgb(220, 220, 220));
    box-shadow: 2px 2px 8px black;
    border: solid;
    border-color: black;
    border-radius: 6px;
    border-width: 2px;
    font-size: 18px;
  }

  .img {
  padding: 20px;
  height: 4px;
  padding-top: 10px;
  }

  .img2 {
    border-style: solid;
    border-color: black;
    border-width: 2px;
    border-radius:  35px 15px; 
    height: 197px;
    padding-top: 12px;
    box-shadow: 3.5px 3.5px 10px black ;
  
  }
</style>

<div class="regis">


  <?php
  $sql = $pdo->prepare('SELECT * FROM funcionario order by profissao');
  if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach ($info as $key => $values) {
      echo '<div class="row test">';
      echo '<div class=" col-4">';
      echo '<div class="img">foto de perfil:</div>  ' . '<div class="img2"><img src = "data:image/png;base64,' . base64_encode($values['img']) . '" width = "180px"   height = "170px"/> </div>';

      

      
      echo "</div>";
      echo '<div class="text-left col-8 p-4">';

      echo 'nome: ' . $values['nome'] . '<br>';
      echo 'email: ' . $values['email'] . '<br>';
      echo 'formacao: ' . $values['formacao'] . '<br>';
      echo 'profissao: ' . $values['profissao'] . '<br>';
      echo 'telefone: ' . $values['telefone'] . '<br>';
      echo 'descricao:  ' . $values['descricao'] . '<br>';
      echo "<a href='user.php?id=" . $values['id'] . "'>(Ver Perfil)</a>";
      echo "</div>";
      echo "</div>";








      echo '<hr>';
    }
  }


  //echo ("Olá O usuário:$ é o usuário número $id. sua descricao é: $descricao");

  //echo ("<BR><BR>Nome: $nome<br>E-mail: $email<br> Formação: $formacao<br>Telefone: $telefone<br>Descrição: $descricao<Br>Senha:$senha</a>");

  ?>
</div>

<?php

include_once(dirname(__FILE__) . "./inc/footer.php");

?>