<?php
session_start(); // Inicia a sessão para rastrear o estado de autenticação.

include('verifica_login.php'); // Inclui o arquivo de verificação de login.

?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<br>
<br>
<hr>
<h2><a href="logout.php">Sair</a></h2>
