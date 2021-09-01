<?php
    session_start();
    $nome = $_SESSION['nome'];
    $administrador = $_SESSION['administrador'];
    
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

