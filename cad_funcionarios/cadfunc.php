<?php
include_once(dirname(__FILE__)."/../inc/MySQL.php");



if (isset($_POST['cadastro'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $formacao = $_POST['formacao'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];
    $senha = md5($_POST['senha']);
      //acentuação da erro 
    $sql = $pdo->prepare("INSERT INTO funcionario (id,nome,email,formacao,telefone,descricao,senha) values (null,?,?,?,?,?,?)");
    if ($sql->execute(array($nome, $email, $formacao, $telefone, $descricao, $senha))) {
        echo 'Dados cadastrados com sucesso.';
       //header, faz o redcionamento das páginas//
        header('location:/GetJob-ProjetoIntegrador/login.php');
        //nao tá achando o login no header
    } else {
        echo 'Dados não cadastrados!';
    }
}

include_once(dirname(__FILE__)."/../inc/header.php");
?>

    <main class="container">
    <form action="" method="POST"  accept-charset="UTF-8">
            <fieldset>
                <h1>Cadastro de Funcionário</h1>
                <br>
                <p>Dados Pessoais</p>
                <div class="input-field">
                    <input type="text" name="nome" name="nome" placeholder="NomeCompleto" required>
                    <div class="efeito"></div>
                </div>
                <br>
                <div class="input-field">
                    <input type="email" name="email" name="email" placeholder="Email" required>
                    <div class="efeito"></div>
                </div>
                <br>
                <div>
                    <label>Formação</label>
                    <input type="radio" name="formacao" value="fundamental" required>Fundamental
                    <input type="radio" name="formacao" value="médio" required>Ensino-Médio
                    <input type="radio" name="formacao" value="superior" required>Ensino-Superior
                </div>
                <br>
                <div class="input-field">
                    <input type="text" name="telefone" id="tel" maxlength="10" required placeholder="Telefone">
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
                <input type="submit" name="cadastro" value="Cadastrar Funcionário">
            </fieldset>
        </form>
    </main>

<?php
    include_once(dirname(__FILE__)."/../inc/footer.php");