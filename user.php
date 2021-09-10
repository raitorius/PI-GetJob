<?php

include_once("./inc/menu.php");
$id = $_GET['id'];

include_once(dirname(__FILE__) . "./inc/MySQL.php");

$sql = $pdo->prepare('SELECT id, nome, email, formacao, profissao, descricao FROM funcionario WHERE id = ' . $id);

if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($info as $key => $values) {

        $nome = $values['nome'];
        $email = $values['email'];
        $form = $values['formacao'];
        $prof = $values['profissao'];
        $desc = $values['descricao'];
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
    <script src="assets/js/app.js"></script>
</head>

<body onload="pessoal();">
    <div class="container row">

        <div class="bck">
            <div class="col">
                <img class="sl1" src="<?php echo $img; ?>">
                <h1 style="color: white"> <?php echo $nome; ?></h1>
            </div>
            <div class="">
                <div class="p-2 text-center mt-5"><label onclick="pessoal();">Pessoal</label></div>
                <div class="p-2 text-center mt-5"><label onclick="info();">Info</label></div>
            </div>
        </div>

        <main>
            <div class="list-1 aaa" id="pessoal">
                <div class="group col sl1">
                    <div class="col c">
                        <h2>Nome Comple: <br>
                            <p style="color: black;"><?php echo $nome ?></p>
                        </h2>
                        <h2>Formação: <br>
                            <p style="color: black;"><?php echo $form ?></p>
                        </h2>
                        <h2>Profissão: <br>
                            <p style="color: black;"><?php echo $prof ?></p>
                        </h2>
                    </div>
                </div>
            </div>
    </div>

    <div class="list-2 bbb" id="info">
        <div class="group col sl1">
            <h3>Biografia:</h3>
            <div class="h-25 d-inline-block">
                <h2><?php echo $desc ?></h2>
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