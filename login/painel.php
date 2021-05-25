<?php
session_start();
include('verificar_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
<h2> <a href="sair.php">Sair</a></h2>