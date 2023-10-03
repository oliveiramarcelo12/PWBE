<?php
$imagem = $_FILES["imagem"]; // Obtém os dados do arquivo de upload

$host = "localhost"; // Nome do servidor do banco de dados MySQL
$username = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL
$db = "pessoa"; // Nome do banco de dados

if ($imagem != NULL) { // Verifica se um arquivo de imagem foi enviado
    $nomeFinal = time() . '.jpg'; // Gera um nome único para o arquivo de imagem

    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) { // Move o arquivo de imagem para um local permanente
        $tamanhoImg = filesize($nomeFinal); // Obtém o tamanho do arquivo

        // Lê o conteúdo do arquivo de imagem e o escapa para evitar injeção de SQL
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

        // Conecta ao banco de dados MySQL usando MySQLi
        $conn = mysqli_connect($host, $username, $password, $db);
        
        if (!$conn) {
            die("Impossível Conectar ao Banco de Dados: " . mysqli_connect_error()); // Verifica a conexão com o banco de dados
        }

        $query = "INSERT INTO PESSOA (PES_IMG) VALUES ('$mysqlImg')"; // Cria uma consulta SQL para inserir a imagem no banco de dados

        if (mysqli_query($conn, $query)) { // Executa a consulta SQL
            unlink($nomeFinal); // Remove o arquivo temporário após a inserção bem-sucedida
            header("Location: exibir.php"); // Redireciona para a página de exibição de imagens
            exit; // Encerra o script
        } else {
            echo "Erro ao inserir imagem no banco de dados: " . mysqli_error($conn); // Trata erros de inserção no banco de dados
        }

        mysqli_close($conn); // Fecha a conexão com o banco de dados
    }
} else {
    echo "Você não realizou o upload de forma satisfatória."; // Exibe uma mensagem se nenhum arquivo de imagem foi enviado
}
?>
