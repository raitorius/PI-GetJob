<?php
include_once(dirname(__FILE__)."/../inc/Mysql.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = $pdo->prepare("DELETE FROM funcionario WHERE id = ?");
    if ($sql->execute(array($id))) {
        if ($sql->rowCount() > 0) {
            echo 'Funcionário excluído com sucesso!';
               header('location:listfuncionario.php');
        } else {
            echo 'id não localizado';
        }
    } else {
        echo 'Erro ao excluir funcionário.';
    }
}


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Excluir Usuário</title>
</head>

<body>
    <form action="" method="POST">
        id: <input type="text" name="id">
        <input type="submit" name="id" value="Excluir">
    </form>
</body>

</html>