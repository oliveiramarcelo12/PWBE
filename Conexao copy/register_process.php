<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

    // Execute uma consulta SQL para inserir o novo usuário no banco de dados.
    $query = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')";
    
    if (mysqli_query($conexao, $query)) {
        $_SESSION['usuario'] = $usuario; // Faça o login automaticamente após o registro.
        header('Location: painel.php'); // Redirecione para a página do painel após o registro.
        exit();
    } else {
        echo "Erro ao registrar o usuário.";
    }
}
?>
