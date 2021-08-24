<?php

include_once("./inc/menu.php");
$id = 8;

include_once(dirname(__FILE__) . "./inc/MySQL.php");
echo "<p style='color:white'>Conectado com sucesso!!</p>";

$sql = $pdo->prepare('SELECT id, nome, estado, nascimento, email, img FROM usuarios WHERE id = ' . $id);

if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($info as $key => $values) {
        
        $nome = $values['nome'];
        $estado = $values['estado'];
        $email = $values['email'];
        $nasc = $values['nascimento'];
        $img = $values['img'];
    }
}
?>

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $nome?></title>
  <link rel="stylesheet" href="assets/css/style_user.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="icon" href="assets/img/logo.png">
</head>

<body>
    <main>
        <div class="container h-50 bck">
            <div class="col">
                    <section style="background-image:url(<?php echo $img;?>)"></section>
                    <h2 style="color: white"><?php echo $nome; ?></h2>
                <div class="col">
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
