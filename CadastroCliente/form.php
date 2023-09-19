<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Conexão com o banco de dados
    $host = 'localhost';
    $senha = '';
    $usuario = 'root';
    $banco = 'cadastro';

    // Cria uma conexão com o banco de dados
    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    // Verifica a conexão
    if (!$conexao) {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }

    // Recupera os dados do formulário
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $data_nascimento = $_POST['data_nascimento'];
    $endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);

    // Insere os dados na tabela do banco
    $sql = "INSERT INTO clientes (nome, email, data_nascimento, endereco) VALUES ('$nome', '$email', '$data_nascimento', '$endereco')";

    if (mysqli_query($conexao, $sql)) {
        // Redireciona para uma página de sucesso
        header('Location: sucesso.php');
        exit();
    } else {
        // Redireciona para uma página de erro
        header('Location: erro.php');
        exit();
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);
}
?>