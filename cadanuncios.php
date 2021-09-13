
<?php

include_once(dirname(__FILE__)."/inc/MySQL.php");



if (isset($_POST['cadastro'])) {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $exigencias = $_POST['exigencias'];
    
      //acentuação da erro 
    $sql = $pdo->prepare("INSERT INTO anuncios (ID,nome,descricao,exigencias) values (null,?,?,?)");
    if ($sql->execute(array($nome, $descricao, $exigencias))) {
        echo 'Dados cadastrados com sucesso.';
        header("location:index.php");
    } else {
        echo 'Dados não cadastrados!';
    }
}
?>

<?php

include_once(dirname(__FILE__)."/inc/header.php");

include_once(dirname(__FILE__)."/inc/menu.php");


?>


    <main class="container">
      <form action="" method="POST">
            <fieldset>
                <h1>Cadastro de Funcionário</h1>
                <br>
                <p>Dados Pessoais</p>
                <div class="input-field">
                    <input type="text" name="nome" id="nome" placeholder="Nome Completo" required>
                    <div class="efeito"></div>
                </div>  
                <br>
                <div>
                    <textarea name="descricao" id="descricao" cols="45" rows="3" placeholder="Descrição" maxlength="500"></textarea>
                </div>
                <br>
                <div>
                    <textarea name="exigencias" id="exigencias" cols="45" rows="5" placeholder="exigências" maxlength="500"></textarea>
                </div>
                <br>
                <input type="submit" name="cadastro" value="Cadastrar Funcionário">
            </fieldset>
        </form>
    </main>
 <?php
include_once(dirname(__FILE__)."/inc/footer.php");
?>