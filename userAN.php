<?php

include_once(dirname(__FILE__) . "/inc/MySQL.php");

include_once(dirname(__FILE__) . "/inc/header.php");

include_once(dirname(__FILE__)."/inc/menu.php");


if (!isset($_GET['id'])) {
    $id = null;
} else {


    $id = $_GET['id'];
}

$sql = $pdo->prepare('SELECT id, nome, descricao, exigencias, profissao FROM anuncios WHERE id');

if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($info as $key => $values) {
        $nome = $values['nome'];
        $descricao = $values['descricao'];
        $exigencias = $values['exigencias'];
        $profissao = $values['profissao'];
    
    }
}
include_once(dirname(__FILE__)."/inc/header.php");

?>


<div class="bck container">
    <div class="col">
        <div class="row">

            <?php
          //  echo '<img src="data:image/png;base64,' . base64_encode($values['img']) . '" width = "180px" height = "180px"/>';
            ?>
        </div>
    </div>
    <div class="info-person">
        <input id="tab-1" type="radio" name="tab" style="display: contents;" class="list-1" checked><label for="tab-1" class="tab">PERFIL</label>
    </div>
    <main>
        <div class="list-1">
            <div class="group col sl1">
                <div class="col c">
                    <h2>Nome: <br>
                        <p><?php echo $nome ?></p>
                    </h2>
                    <h2>Descrição: <br>
                        <p><?php echo $descricao ?></p>
                    </h2>
                    <h2>Exigências: <br>
                        <p><?php echo $exigencias ?></p>
                    </h2>
                    <h2>profissao: <br>
                        <p><?php echo $profissao ?></p>
                        <div class="text-right s"><button><a echo style="color:black; font-family:'Courier'; text-decoration: none;background-color:whith; border: 3px outset black" role="button" href="login.php">Contratar</a></button></div>
                    </h2>
                </div>
            </div>
        </div>
</div>


<?php
include_once(dirname(__FILE__) . "/inc/footer.php");
?>
</main>