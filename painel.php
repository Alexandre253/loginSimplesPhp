<?php
session_start();
include('verifica_login.php');
print_r($SESSION)
?>
<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>