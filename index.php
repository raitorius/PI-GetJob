<?php
include_once(dirname(__FILE__)."/inc/MySQL.php");

include_once(dirname(__FILE__) . "/inc/header.php");
include_once("/inc/menu.php");
?>


<div class="bg-dark"><div class="text-center" style= "color: white; font-size: 4em;">Vagas disponíveis:<?php echo $_SESSION['qtde']?></div>
<?php 


include_once(dirname(__FILE__) . "/inc/listwork.php");
?>

</div>
<?php
include_once(dirname(__FILE__) . "/inc/footer.php");
include_once(dirname(__FILE__) . "/inc/down.php");
?>

<style>
    body{
        background: black;
    }
</style>