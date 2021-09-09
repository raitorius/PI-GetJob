<?php

include_once(dirname(__FILE__) . "/../inc/Mysql.php");




$id = "";
$nome = "";
$email = "";
$formacao = "";
$telefone = "";
$descricao = "";
$senha = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = $pdo->prepare("SELECT*FROM funcionario WHERE id=?");
    if ($sql->execute(array($id))) {
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($info as $key => $values) {
            $id = $values['id'];
            $nome = $values['nome'];
            $email = $values['email'];
            $formacao = $values['formacao'];
            $telefone = $values['telefone'];
            $descricao = $values['descricao'];
            $senha = $values['senha'];
        }
    }
}

if (isset($_POST['atualizar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $formacao = $_POST['formacao'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];
    $senha = $_POST['senha'];

    echo "Aqui: ".$id;
    $sql = $pdo->prepare("UPDATE funcionario SET id=?,nome=?,email=?,formacao=?,telefone=?,descricao=?,senha=? WHERE id=?");
    if ($sql->execute(array($id, $nome, $email, $formacao, $telefone, $descricao, $senha, $id))) {
        if ($sql->rowCount() > 0) {
            echo 'Funcionário atualizado com sucesso!!';
            header('location:listfuncionario.php');
        } else {
            echo 'Código não localizado<br>';
            print_r($sql->errorInfo());
        }
    } else {

        echo 'Dados não alterados';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Registro </title>
    
</head>

<body>
 

        <form action="" method="post">
            <!-- <label for="nome">id:</label> -->
            <input style="background-color:bisque;" type="hidden" name="id" id="id" value="<?php echo $id ?>" readonly>
            </br>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" required>
            </br>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" value="<?php echo $email ?>" required>
            </br>
            <label for="email">Formação: </label>
            <input type="text" name="formacao" id="formacao" value="<?php echo $formacao ?>" required>
            </br>
            <label for="email">Telefone: </label>
            <input type="text" name="telefone" id="telefone" value="<?php echo $telefone ?>" required>
            </br>
            <label for="email">Descrição: </label>
            <input type="text" name="descricao" id="descricao" value="<?php echo $descricao ?>" required>
            </br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" value="<?php echo $senha ?>" required>
            </br>
            <input type="submit" name="atualizar" value="Atualizar">
        </form>



</body>

</html>