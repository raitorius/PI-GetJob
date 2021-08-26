<?php
include_once(dirname(__FILE__)."/inc/MySQL.php");

include_once("./inc/header.php");
include_once("./inc/menu.php");


?>

<?php

/*$usuarios = [
    1 => ['nome' => 'Josue Ramos',      'idade' => 54,  'ocupacao' => 'ambulante' ],
    3 => ['nome' => 'Leonardo V.',      'idade' => 20,  'ocupacao' => 'desenvolvedor' ],
    4 => ['nome' => 'Patricia S.',      'idade' => 20,  'ocupacao' => 'quimica' ],
    5 => ['nome' => 'Figaldo M.' ,      'idade' => 34,  'ocupacao' => 'medico' ],
    7 => ['nome' => 'Ana Maria'  ,      'idade' => 45,  'ocupacao' => 'cozinheira' ],
];*/

if( isset($_GET['funcionario']) ) {
    $id = (int)$_GET['funcionario'];

    // faria aqui o: SELECT * FROM usuarios WHERE id = $usuario_id 

    if( array_key_exists($id, $funcionario) )  // no meu caso esse seria meu   SELECT
        $funcionario = $funcionario[$id];
    else
        die('Funcionário nao encontrado');
}
else
    die('Funcionário nao encontrado');

?>

<h2>Perfil de '<?php echo $funcionario['nome'] ?>'</h2>

<p>E-mail <?php echo $funcionario['email'] ?> email.</p>

<p>descricao<?php echo $funcionario['descricao'] ?>.</p>








<?php

include_once(dirname(__FILE__)."/inc/footer.php");

?>
