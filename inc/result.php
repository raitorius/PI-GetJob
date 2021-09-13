<?php
$servidor = "localhost:3308";
$usuario = "root";
$senha = "";
$dbname = "getjob";
//Criar a conexao

$teste = mysqli_connect($servidor, $usuario, $senha, $dbname);

$pesquisar = $_POST['pesquisar'];
$result_anun = "SELECT * FROM anuncios WHERE nome LIKE '$pesquisar' ";
$result_anuncios = mysqli_query($teste, $result_anun);

echo "Você pesquisou: " . $pesquisar;
while ($rows_anun = mysqli_fetch_array($result_anuncios)) {
    // echo "<div class='col col-md-3 p-3 mb-5'>Nome do anuncio: " . $rows_anun['nome'] . '</div>';
    // echo "Descrição: " . $rows_anun['descricao'] . "<br>";
    // echo "ID: " . $rows_anun['ID'] . "<br>";
    // echo "<a href='workperf.php?id=" . $rows_anun['ID'] . "'>Acessar</a>";
    // echo "<hr>";

    echo "<div style='border: 2px solid blue; background-color: gray'> ". $rows_anun['ID'] ."
    <div><h1>". $rows_anun['nome'] ."</h1> <h3>". $rows_anun['descricao'] ."</h3></div> 
    <div><button><a style= role='button'; href='../workperf.php?id=" . $rows_anun['ID'] ."';>Contratar</a></button></div>
    </div><br>";
}
