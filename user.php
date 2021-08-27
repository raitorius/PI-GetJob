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
    <div class="bck p-5 container-fluid">
        <div class="col">
            <div class="row">
                <img class="sl1" src="<?php echo $img; ?>">
                <h1 style="color: white; modal-content"> <?php echo $nome; ?></h1>
            </div>
        </div>
        <main>
    </div>
    <div class="col sl1">
        <div class="col c">
            <h2>Nome Completo: <br>
                <p><?php echo $nome; ?></p>
            </h2>
            <h2>Data de Nascimento: <br>
                <p><?php echo $nasc;?></p>
            </h2>
            <h2>Estado: <br>
                <p><?php echo $estado; ?></p>
            </h2>
        </div>
    </div>
    <div class="col sl1">
        <h1>Biografia:</h1>
        <div class="h-25 d-inline-block">

        </div>
    </div>
    <div class="col sl1">
        <h1 class="mx-auto">Contato:</h1>
        <h2>E-mail: <br>
            <p><?php echo $email; ?></p>
        </h2>
    </div>
    <?php
    include_once(dirname(__FILE__) . "./inc/footer.php");
    ?>
    </main>
</body>

</html>