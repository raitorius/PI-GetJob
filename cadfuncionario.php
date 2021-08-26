<?php

include_once(dirname(__FILE__) . "/inc/MySQL.php");



if (isset($_POST['cadastro'])) {
    // $img = $_FILES['img'];
    $file_name = $_FILES['img']['name'];
    $file_tmp = $_FILES['img']['tmp_name'];
    $img =  $_FILES['img'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $formacao = $_POST['formacao'];
    $profissao = $_POST['profissao'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];
    $senha = md5($_POST['senha']);
    //acentuação da erro 
    $sql = $pdo->prepare("INSERT INTO funcionario (id,img,nome,email,formacao,profissao,telefone,descricao,senha) values (null,?,?,?,?,?,?,?,?)");
    if ($sql->execute(array($img, $nome, $email, $formacao, $profissao, $telefone, $descricao, $senha))) {
        echo 'Dados cadastrados com sucesso.';
        //header, faz o redcionamento das páginas//
        header('location:/GetJob-ProjetoIntegrador/login.php');
        //nao tá achando o login no header
    } else {
        echo 'Dados não cadastrados!';
    }
}
?>



<?php
include_once(dirname(__FILE__) . "/inc/header.php");
?>

<?php
include_once(dirname(__FILE__) . "/inc/menu.php");
?>
<main class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <h1>Cadastro de Funcionário</h1>
            <br>
            <p>Dados Pessoais</p>
            <label for="img">Imagem de Perfil:</label>
            <input type="file" name="img" />
            <div class="input-field">
                <br>
                <input type="text" name="nome" id="nome" placeholder="Nome  Completo" required>
                <div class="efeito"></div>
            </div>
            <br>
            <div class="input-field">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <div class="efeito"></div>
            </div>
            <br>
            <div>
                <label>Formação</label>
                <input type="radio" name="formacao" id="formacao" value="fundamental" required>Fundamental
                <input type="radio" name="formacao" id="formacao" value="médio" required>Ensino-Médio
                <input type="radio" name="formacao" id="formacao" value="superior" required>Ensino-Superior
            </div>
            <br>
            <div>
                <textarea name="profissao" id="profissao" cols="35" rows="4" placeholder="Profissões" maxlength="50"></textarea>
            </div>
            <div class="input-field">
                <input type="text" name="telefone" id="telefone" maxlength="10" required placeholder="Telefone">
                <div class="efeito"></div>
            </div>
            <br>
            <div>
                <textarea name="descricao" id="descricao" cols="35" rows="10" placeholder="Descrição" maxlength="500"></textarea>
            </div>
            <br>
            <div class="input-field">
                <input type="password" name="senha" id="senha" placeholder="Senha" minlength="5" maxlength="15">
                <div class="efeito"></div>
            </div>
            <form action="" method="post">
                <input type="submit" name="cadastro" value="Cadastrar Funcionário">
            </form>
        </fieldset>
    </form>
</main>

<?php
include_once(dirname(__FILE__) . "/inc/footer.php");
?>