<?php

include_once("./inc/menu.php");
$id = 12;

include_once(dirname(__FILE__) . "./inc/MySQL.php");
echo "<p style='color:black'>Conectado com sucesso!!</p>";

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
    <main>
        <div class="h-100 bck row">
            <div class="col sl1">
                <img class="sl1" src="<?php echo $img; ?>">
                <h1 style="color: white"><?php echo $nome; ?></h1>
                <h1 style="font-family:'Times New Roman';">DESCRIÇÃO:</h1>
            </div>
            <div class="col sl1">
            <h1 style="font-family:'Times New Roman';">INFORMAÇÕES:</h1>
            <div class="col c">
                <h3>Nascimento: <?php echo $nasc ?></h3>
                <h3>Email: <?php echo $email ?></h3>
                <h3>Estado: <?php echo $estado ?></h3>
            </div>
            </div>
        </div>
        <?php
        include_once(dirname(__FILE__) . "./inc/footer.php");
        ?>
    </main>
</body>

</html>