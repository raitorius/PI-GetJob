<?php
    session_start();
    
    // Variável nome recebe o nome da sessão

    // Verifica se a variável foi setada primeiro e a recebe
    // caso contrário recebe vazio;
    $nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : "";
    
    $administrador = isset($_SESSION['administrador']) ? ($_SESSION['administrador']) : "";
    
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

