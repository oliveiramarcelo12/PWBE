<?php
// Definindo constantes para os parâmetros de conexão ao banco de dados
define('HOST','127.0.0.1');
define('USUARIO','root');
define('SENHA','');
define('DB','alunos');

// Estabelecendo uma conexão com o banco de dados usando MySQLi
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');
?>
