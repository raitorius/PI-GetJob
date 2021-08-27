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

    

    
        




        echo '<hr>';
    }
}

?>

<?php

include_once(dirname(__FILE__)."./inc/footer.php");

?>