<?php
session_start(); // Inicia a sessão (se ainda não estiver iniciada).

session_destroy(); // Destrói todas as informações da sessão atual.

header('Location: index.php'); // Redireciona o usuário para a página de login.

exit(); // Encerra a execução do script.
?>
