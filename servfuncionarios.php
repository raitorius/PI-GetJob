<?php
include_once(dirname(__FILE__)."/inc/MySQL.php");

include_once("./inc/header.php");
include_once("./inc/menu.php");

?>


<?php

$login = "_GET[perfil]"; /*aqui vai pegar o que tem escrito depois do perfil=$perfil que é exatamente o perfil do fulano*/

$sql = "SELECT * FROM tabela WHERE login='$funcionario'";

$id = $l['id'];
$nome = $l['nome'];
$email = $l['email'];
$formacao = $l['formacao'];
$telefone = $l['telefone'];
$descricao =$l ['descricao'];
$senha = $l['senha'];


echo ("Olá O usuário:$nome é o <div style='color:red'>usuário<> número $id. sua descricao é: $descricao");

echo ("<BR><BR>Nome: $nome<br>E-mail: $email<br> Formação: $formacao<br>Telefone: $telefone<br>Descrição: $descricao<Br>Senha:$senha</a>");

?>







<?php

include_once(dirname(__FILE__)."/inc/footer.php");

?>
