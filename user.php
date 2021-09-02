<?php

include_once("./inc/header.php");
include_once("./inc/menu.php");
include_once(dirname(__FILE__) . "./inc/MySQL.php");




$id =  isset($_GET['id'])  ? $_GET['id'] : false;

$sql = $pdo->prepare('SELECT id, nome, nascimento, email FROM usuarios WHERE id = ' . $id);

if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    if ($sql->rowCount() > 0) {
        foreach ($info as $key => $values) {

            $nome = $values['nome'];
           // $estado = $values['estado'];
            $email = $values['email'];
            $nasc = $values['nascimento'];
            // $img = $values['imagem'];
        }
    } else {
        echo 'Poxa vida não achei ninguem';
        $nome = "";
        $estado = "";
        $email = "";
        $nasc = "";
    }
} else {
    print_r($pdo->errorInfo());
    print_r($sql->errorInfo());
}
?>


<div class="bck container">
    <div class="col">
        <div class="row">
            <img class="sl1" src="<?php echo $img; ?>">
            <h1 style="color: white"> <?php echo $nome; ?></h1>
        </div>
    </div>
    <div class="info-person">
        <input id="tab-1" type="radio" name="tab" style="display: contents;" class="list-1" checked><label for="tab-1" class="tab">Pessoal</label>
        <input id="tab-2" type="radio" name="tab" style="display: contents;" class="list-2"><label for="tab-2" class="tab">Info</label>
    </div>
    <main>
        <div class="list-1">
            <div class="group col sl1">
                <div class="col c">
                    <h2>Nome Completo: <br>
                        <p><?php echo $nome ?></p>
                    </h2>
                    <h2>Data de Nascimento: <br>
                        <p><?php echo $nasc ?></p>
                    </h2>
                    <h2>Estado: <br>
                        <p><?php echo $estado ?></p>
                    </h2>
                </div>
            </div>
        </div>

        <div class="list-2">
            <div class="group col sl1">
                <h3>Biografia:</h3>
                <div class="h-25 d-inline-block">

                </div>
            </div>
            <div class="group col sl1">
                <h3 class="mx-auto">Contato:</h3>
                <h2>E-mail: <br>
                    <p><?php echo $email ?></p>
                </h2>
            </div>
        </div>
</div>
<?php
include_once(dirname(__FILE__) . "./inc/footer.php");
?>
</main>