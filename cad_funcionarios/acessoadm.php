<?php
    // Inicio da Sessão
    session_start();
    
    // Variável nome recebe o nome da sessão

    // Verifica se a variável foi setada primeiro e a recebe
    // caso contrário recebe vazio;
    $nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : "";
    
    $administrador = isset($_SESSION['administrador']) ? ($_SESSION['administrador']) : "";
    
    
    // Variável nome recebe o nome da sessão

    // if(isset($_SESSION['nome'])){
    //     $nome = $_SESSION['nome'];
    // } else {
    //     $nome = '';
    // }

    // Verifica se a variável foi setada primeiro e a recebe
    // caso contrário recebe vazio;
    $nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : "";
    
    // 
    $administrador = $_SESSION['administrador'];
    
    // Escreve mensagem de boas vindas na tela ???
    echo "<h1>Ola $nome. <br>Seja bem vindo ao sistema!</h1>";
    echo "Administrador: $administrador";
   
?>
<?php
if($administrador == 1){
?>

<?php
}
?>

<a href="listfuncionario.php">Administrador</a>


<a href="/login.php">Sair</a>

