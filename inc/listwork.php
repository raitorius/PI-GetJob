<?php

$_SESSION['qtde'] = "";

$pdo = new PDO('mysql:host=localhost:3308;dbname=getjob', 'root', '');
$_SESSION['qtde'] = 0;
$sql = $pdo->prepare('SELECT * FROM anuncios');
if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['qtde'] = count($info);
?>
    <div class="container">
        <div class="row">
            <?php
            foreach ($info as $key => $values) {
                $img = "<img" . $values['ID'] . '<br>';
                $id = "<p style='color: black'>" . $values['ID'] . '</p>';
                $nome = "<h5 style='color: black'>Nome: " . $values['nome'] . '<br></h5>';

            ?>
                <div class="col col-md-3 p-3 mb-5">
                    <div class="bg-white p-4 h-100" style="border: 2px solid goldenrod;">
                        <?php echo $nome ?>
                        <img class="img-fluid" src="./assets/img/unload.png">
                        <?php echo $id ?>
                        <div class="text-center"><button><a style="color:black; font-family:'Courier'; text-decoration: none;background-color:green; border: 3px outset gray" role="button" href="workperf.php?id=<?php echo $values['ID']; ?>">Contratar</a></button></div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
        </div>
    </div>

    <head>
        <link rel="stylesheet" href="./assets/css/work.css">
    </head>