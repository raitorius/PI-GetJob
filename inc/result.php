<?php
 $servidor = "localhost:3308";
 $usuario = "root";
 $senha = "";
 $dbname = "getjob";
 //Criar a conexao

 $teste = mysqli_connect($servidor, $usuario, $senha, $dbname);

$pesquisar = $_POST['pesquisar'];
$result_anun = "SELECT * FROM anuncios WHERE nome LIKE '$pesquisar' LIMIT 5";
$result_anuncios = mysqli_query($teste, $result_anun);

while($rows_anun = mysqli_fetch_array($result_anuncios)){
    echo "Nome do anuncio: ".$rows_anun['nome']."<br>";
    echo "Descrição: " .$rows_anun['descricao']."<br>";
    echo "<a href='workperf.php'>Acessar</a>";
    echo "<hr>";
}


?>