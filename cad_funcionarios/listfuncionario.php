<?php
$pdo = new PDO('mysql:host=localhost:3308;dbname=getjob', 'root', '');

$sql = $pdo->prepare('SELECT * FROM funcionario');
if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach ($info as $key => $values) {
        echo 'id: ' . $values['id'] . '<br>';
        echo 'img: ' . $values['img'] . '<br>';
        echo 'nome: ' . $values['nome'] . '<br>';
        echo 'email: ' . $values['email'] . '<br>';
        echo 'formacao: ' . $values['formacao'] . '<br>';
        echo 'profissao: ' . $values['profissao'] . '<br>';
        echo 'telefone: ' . $values['telefone'] . '<br>';
        echo 'descricao: ' . $values['descricao'] . '<br>';
        echo "<a href='deletFunci.php?id=" . $values['id'] . "'>(Deletar)<a/>";
        echo "<a href='atualifuncionario.php?id=" . $values['id'] . "'>(Atualizar)<a/>";




        echo '<hr>';
    }
}

?>
<input type="button" value="Cadastrar" onclick="parent.location='cadfuncionario.php'">