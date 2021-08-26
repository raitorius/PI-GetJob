<?php
include_once(dirname(__FILE__)."/../inc/Mysql.php");



if (isset($_POST['cadastro'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nascimento = $_POST['nascimento'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $rua = $_POST['rua'];
    $numero_da_casa = $_POST['numero_da_casa'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
      //acentuação da erro 
    $sql = $pdo->prepare("INSERT INTO usuarios (id,nome,sobrenome,nascimento,rg,cpf,rua,numero_da_casa,bairro,estado,cidade,cep,email,senha) values (null,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    if ($sql->execute(array($nome, $sobrenome, $nascimento, $rg, $cpf, $rua, $numero_da_casa, $bairro, $estado, $cidade, $cep, $email, $senha, ))) {
        echo 'Dados cadastrados com sucesso.';
       //header, faz o redcionamento das páginas//
        header('location:../login.php');
        //nao tá achando o login no header
    } else {
        echo 'Dados não cadastrados!';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CadastroGet</title>
</head>

<body>
    <form action="" method="POST">
        nome : <input type="text" name="nome" required>
        <br />
        sobrenome: <input type="text" name="sobrenome" required>
        <br />
        nascimento: <input type="text" name="nascimento" required>
        <br />
        rg: <input type="text" name="rg" required>
        <br />
        cpf: <input type="text" name="cpf" required>
        <br />
        rua: <input type="text" name="rua" required>
        <br />
        numero_da_casa: <input type="text" name="numero_da_casa" required>
        <br />
        bairro: <input type="text" name="bairro" required>
        <br />
        estado: <input type="text" name="estado" required>
        <br />
        cidade: <input type="text" name="cidade" required>
        <br />
        cep: <input type="text" name="cep" required>
        <br />
        email: <input type="text" name="email" required>
        <br />
        senha: <input type="password" name="senha" required>
        <br />
        <input type="submit" name="cadastro" value="Cadastrar">

    </form>
</body>

</html>