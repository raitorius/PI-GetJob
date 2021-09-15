<?php
include_once(dirname(__FILE__)."/inc/MySQL.php");

include_once(dirname(__FILE__)."/inc/header.php");

include_once(dirname(__FILE__)."/inc/menu.php");

$servidor = "localhost:3308";
$usuario = "root";
$senha = "";
$dbname = "getjob";
//Criar a conexao

$teste = mysqli_connect($servidor, $usuario, $senha, $dbname);

$pesquisar = $_POST['pesquisar'];
$result_anun = "SELECT * FROM anuncios WHERE profissao LIKE '$pesquisar' ";
$result_anuncios = mysqli_query($teste, $result_anun);

echo "Você pesquisou: " . $pesquisar;
while ($rows_anun = mysqli_fetch_array($result_anuncios)) {
    // echo "<div class='col col-md-3 p-3 mb-5'>Nome do anuncio: " . $rows_anun['nome'] . '</div>';
    // echo "Descrição: " . $rows_anun['descricao'] . "<br>";
    // echo "ID: " . $rows_anun['ID'] . "<br>";
    // echo "<a href='workperf.php?id=" . $rows_anun['ID'] . "'>Acessar</a>";
    // echo "<hr>";

    // echo "<div style='border: 5px dashed green; background-color: gray'> ". $rows_anun['ID'] ."
    // <div><h1 style='background-color:white; margin-right:50em'>". $rows_anun['nome'] ."</h1> <h3>". $rows_anun['descricao'] ."</h3></div> 
    // <div><button><a style= role='button'; href='../workperf.php?id=" . $rows_anun['ID'] ."';>Vizualise</a></button></div>
    // </div><br>";
?><div class="container">
        <div class="row">

            <div class="col col-md-3 p-3 mb-5">
                <div class="bg-white p-4 h-100" style="border: 2px solid goldenrod;">
                    <div>Profissão <?php echo $rows_anun['profissao'] ?></div>
                    <div>Nome: <?php echo $rows_anun['nome'] ?></div>
                    <div>Descrição: <?php echo $rows_anun['descricao'] ?></div>
                    <div class="text-center"><button><a style="color:black; font-family:'Courier'; text-decoration: none;background-color:green; border: 3px outset gray" role="button" href="../workperf.php?id=<?php echo $rows_anun['ID'] ?>">Contratar</a></button></div>
                    <div> <?php echo $rows_anun['ID'] ?></div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<?php
include_once(dirname(__FILE__)."/inc/menu.php");

include_once(dirname(__FILE__)."/inc/down.php");
?>
