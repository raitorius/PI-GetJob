<?php

include_once("./inc/menu.php");
$id = 12;

include_once(dirname(__FILE__) . "./inc/MySQL.php");

$sql = $pdo->prepare('SELECT id, nome, estado, nascimento, email, imagem FROM usuarios WHERE id = ' . $id);

if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($info as $key => $values) {

        $nome = $values['nome'];
        $estado = $values['estado'];
        $email = $values['email'];
        $nasc = $values['nascimento'];
        $img = $values['imagem'];
    }
}
include_once("./inc/header.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nome ?></title>
    <link rel="stylesheet" href="assets/css/style_user.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="assets/img/logo_web.png">
</head>

<body>
    <div class="bck container-fluid">
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
    </div>
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
    <?php
    include_once(dirname(__FILE__) . "./inc/footer.php");
    ?>
    </main>
</body>

</html>