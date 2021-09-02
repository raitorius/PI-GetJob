<?php
include_once(dirname(__FILE__)."/inc/MySQL.php");

include_once(dirname(__FILE__)."./inc/header.php");

?>
<?php

include_once(dirname(__FILE__)."./inc/menu.php");

?>

<h1>Serviços cadastrados no GetJob:</h1>
          
<div class="formulario">


    <?php
    $sql = $pdo->prepare('SELECT * FROM funcionario order by profissao');
    if ($sql->execute()) {
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach ($info as $key => $values) {
            echo 'img: ' . $values['img'] . '<br>';
            echo 'nome: ' . $values['nome'] . '<br>';
            echo 'email: ' . $values['email'] . '<br>';
            echo 'formacao: ' . $values['formacao'] . '<br>';
            echo 'profissao: ' . $values['profissao'] . '<br>';
            echo 'telefone: ' . $values['telefone'] . '<br>';
            echo 'descricao: ' . $values['descricao'] . '<br>';
            echo "<a href='user.php?id=" . $values['id'] . "'>(Ver Perfil)<a/>";
        

        
            




            echo '<hr>';
        }
    }


    //echo ("Olá O usuário:$ é o usuário número $id. sua descricao é: $descricao");

    //echo ("<BR><BR>Nome: $nome<br>E-mail: $email<br> Formação: $formacao<br>Telefone: $telefone<br>Descrição: $descricao<Br>Senha:$senha</a>");

    ?>
</div>

<?php

include_once(dirname(__FILE__)."./inc/footer.php");

?>




