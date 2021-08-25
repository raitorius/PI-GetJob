<?php

include_once(dirname(__FILE__)."/../MySQL.php");


$_SESSION['email'] = "";
// $_SESSION['senha'] = "";

if (isset($_POST['enviar'])) {
  $email = $_POST['email'];
  $senha = md5($_POST['senha']);
  $sql = $pdo->prepare("SELECT * FROM usuarios 
                              WHERE email= ? AND senha = ?");
  if ($sql->execute(array($email, $senha))) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    if (count($info) > 0) {
      foreach ($info as $key => $values) {
        $_SESSION['email'] = $values['email'];
        $_SESSION['logado'] = true;

        // $_SESSION['senha'] = $values['senha'];
      }
      echo '<h6 style="color: green;">Usuario Logado</h6>';
    } else {
      echo '<h6 style="color: red">Este usuario não existe</h6>';
    }
  }
}

echo "FELIZ";