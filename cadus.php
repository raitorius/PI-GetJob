<?php
/*include_once(dirname(__FILE__)."/../layout/Mysql.php");



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
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);
    $confirme_senha = $_POST['confirme_senha'];
      //acentuação da erro 
    $sql = $pdo->prepare("INSERT INTO usuarios (id,nome,sobrenome,nascimento,rg,cpf,rua,numero_da_casa,bairro,estado,cidade,cep,email,login,senha,confirme_senha) values (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    if ($sql->execute(array($nome, $sobrenome, $nascimento, $rg, $cpf, $rua, $numero_da_casa, $bairro, $estado, $cidade, $cep, $email, $login, $senha, $confirme_senha))) {
        echo 'Dados cadastrados com sucesso.';
       //header, faz o redcionamento das páginas//
        header('location:../layout/login.php');
        //nao tá achando o login no header
    } else {
        echo 'Dados não cadastrados!';
    }
}*/
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cad Usuário</title>
    <link rel="stylesheet" href="fuction/style1.css">
    <link rel="stylesheet" href="fuction/font.css">
</head>

<body>
    <main class="container">
        <form>
            <fieldset>
                <h1 class="cor">Cadastro de Usuário</h1>
                <br>
                <p class=" cor">Seus Dados</p>
                <p class="cor">Todos os campos devem ser preenchidos</p>
                <div class="input-field">
                    <input type="text" name="name" id="name" placeholder="NomeCompleto" required>
                    <div class="efeito"></div>
                </div>
                <br>
                <label class="cor">Data de nascimento</label>
                <div>
                    <input type="date" name="Datansc" id="datansc" required>
                </div>
                <br>
                <div class="input-field">
                    <input type="text" name="rg" id="rg" placeholder="rg" maxlength="8" required>
                    <div class="efeito"></div>
                </div>
                <br>
                <div class="input-field">
                    <input type="text" name="cpf" id="cpf" placeholder="CPF" maxlength="14" required>
                    <div class="efeito"></div>
                </div>
                <br>
                <div>
                    <div class="input-field">
                        <input type="text" name="bairro" id="bairro" placeholder="Bairro" required>
                        <div class="efeito"></div>
                    </div>
                    <div class="input-field">
                        <input type="number" name="number" id="number" placeholder="Número Casa" required>
                        <div class="efeito"></div>
                    </div>
                    <br>
                    <div class="input-field">
                        <input type="text" name="rua" id="rua" placeholder="Rua" required>
                        <div class="efeito"></div>
                    </div>
                    <br>
                    <div>
                        <!-- <input type="submit" name="est" id="est" placeholder="estado" required> -->
                        <select name="estado" id="">
                            <option value="PR">Amapá</option>
                            <option value="PR">Alagoas</option>
                            <option value="PR">Acre</option>
                            <option value="PR">Amazonas</option>
                            <option value="PR">Bahia</option>
                            <option value="PR">Ceará</option>
                            <option value="PR">Espirito Santo</option>
                            <option value="PR">Goiás</option>
                            <option value="PR">Minas Gerais</option>
                            <option value="PR">Mato Grosso</option>
                            <option value="PR">Maranhão</option>
                            <option value="PR">Mato grosso do sul</option>
                            <option value="PR">Paraná</option>
                            <option value="PR">Pernambuco</option>
                            <option value="PR">Pará</option>
                            <option value="PR">Piauí</option>
                            <option value="PR">Paraíba</option>
                            <option value="PR">Rio de Janeiro</option>
                            <option value="PR">Rio Grande do Sul</option>
                            <option value="PR">Rio Grande do Norte</option>
                            <option value="PR">Rondônia</option>
                            <option value="PR">Roraima</option>
                            <option value="PR">Santa Catarina</option>
                            <option value="PR">Sergipe</option>
                            <option value="PR">São Paulo</option>
                            <option value="PR">Tocantins</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <div class="input-field">
                            <input type="text" name="cid" id="cidade" placeholder="Cidade" required>
                            <div class="efeito"></div>
                        </div>
                        <br>
                        <div>
                            <div class="input-field">
                                <input type="text" name="cep" id="cep" placeholder="CEP" maxlength="9" required>
                                <div class="efeito"></div>
                            </div>
                            <br>
                            <div class="input-field">
                                <input type="email" name="email" id="email" placeholder="Email" required>
                                <div class="efeito"></div>
                            </div>
                            <br>
                            <div>
                                <div class="input-field">
                                    <input type="password" name="senha" id="senha" placeholder="senha" required>
                                    <div class="efeito"></div>
                                </div>
                                <input type="submit" value="Cadastrar Usuário">
            </fieldset>
        </form>
    </main>
</body>

</html>