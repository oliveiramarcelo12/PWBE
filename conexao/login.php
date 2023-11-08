<?php
session_start(); // Inicia a sessão para rastrear o estado de autenticação.
include('conexao.php'); // Inclui o arquivo de conexão com o banco de dados.

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    // Verifica se os campos de usuário e senha estão vazios.
    // Se estiverem vazios, redireciona de volta para a página de login.
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select user from login where user = '{$usuario}' and pass = md5('{$senha}')";
// Cria uma consulta SQL para verificar se as credenciais fornecidas são válidas.

$result = mysqli_query($conexao, $query); // Executa a consulta no banco de dados.

$row = mysqli_num_rows($result); // Conta o número de linhas no resultado da consulta.

if($row == 1) {
    // Se houver uma linha correspondente no banco de dados, o login é bem-sucedido.
    $_SESSION['usuario'] = $usuario; // Define a variável de sessão 'usuario'.
    header('Location: painel.php'); // Redireciona para a página do painel.
    exit();
} else {
    // Se não houver uma linha correspondente, o login falhou.
    $_SESSION['nao_autenticado'] = true; // Define uma variável de sessão para indicar um erro de autenticação.
    header('Location: index.php'); // Redireciona de volta para a página de login.
    exit();
}
?>
