<?php
$servidor = "localhost:3308";
$usuario = "root";
$senha = "";
$dbname = "getjob";
//Criar a conexao

$teste = mysqli_connect($servidor, $usuario, $senha, $dbname);

$pesquisar = $_POST['pesquisar'];
$result_anun = "SELECT * FROM anuncios WHERE ID LIKE '$pesquisar' LIMIT 5";
$result_anuncios = mysqli_query($teste, $result_anun);

while ($rows_anun = mysqli_fetch_array($result_anuncios)) {
    echo "Nome do anunci: " . $rows_anun['ne'] . "<br>";
    echo "Descrição: " . $rows_anun['descricao'] . "<br>";
    echo "ID: " . $rows_anun['ID'] . "<br>";
    echo "<a href='workperf.php?id=" . $rows_anun['ID'] . "'>Acessar</a>";
    echo "<hr>";
}
