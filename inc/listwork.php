
<?php
$pdo = new PDO('mysql:host=localhost:3308;dbname=getjob', 'root', '');

$sql = $pdo->prepare('SELECT * FROM anuncios');
if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach ($info as $key => $values) {
        $img = "<img" . $values['ID'] . '<br>';
        $id = "<h5 style='color: white'>" . $values['ID'] . '<br></h5>';
        $nome = "<h5 style='color: white'>Nome: " . $values['nome'] . '<br></h5>';
        $desc = "<h5 style='color: white'>Descrição: " . $values['descricao'] . '<br></h5>';
?>

        <div class="container">
            <div class="container-fluid">
                <div class="row a">
                    <div class="col-3">
                        <?php echo $nome ?>
                        <img class="img-fluid" src="./assets/img/unload.png">
                        <?php echo $desc ?>
                        <?php echo $id ?>
                    </div>
                </div>
            </div>
        </div><?php
            }
        }
                ?>

<head>
    <link rel="stylesheet" href="./assets/css/work.css">
</head>