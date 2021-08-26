<?php
include_once(dirname(__FILE__)."/inc/MySQL.php");

include_once(dirname(__FILE__)."./inc/header.php");

?>
<?php

include_once(dirname(__FILE__)."./inc/menu.php");

?>


          

<?php
$sql = $pdo->prepare('SELECT * FROM funcionario');
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
        echo "<a href='contrata.php?id=" . $values['id'] . "'>(CONTRATAR)<a/>";
    

    
        




        echo '<hr>';
    }
}


//echo ("Olá O usuário:$ é o usuário número $id. sua descricao é: $descricao");

//echo ("<BR><BR>Nome: $nome<br>E-mail: $email<br> Formação: $formacao<br>Telefone: $telefone<br>Descrição: $descricao<Br>Senha:$senha</a>");

?>

<?php

include_once(dirname(__FILE__)."./inc/footer.php");

?>




