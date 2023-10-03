<?php
$host = "localhost"; // Nome do servidor do banco de dados MySQL
$username = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL
$db = "pessoa"; // Nome do banco de dados

$PicNum = $_GET["PicNum"]; // Obtém o parâmetro "PicNum" da solicitação GET, que é o ID da imagem a ser exibida

$conn = new mysqli($host, $username, $password, $db); // Cria uma nova conexão MySQLi

if ($conn->connect_error) {
    die("Impossível conectar ao banco de dados: " . $conn->connect_error); // Verifica a conexão com o banco de dados e trata erros, se houverem
}

$query = "SELECT * FROM PESSOA WHERE PES_ID = ?"; // Cria uma consulta SQL parametrizada para selecionar uma imagem com base no ID

$stmt = $conn->prepare($query); // Prepara a consulta SQL
$stmt->bind_param("i", $PicNum); // Liga o parâmetro ao valor recebido na solicitação GET
$stmt->execute(); // Executa a consulta
$result = $stmt->get_result(); // Obtém o resultado da consulta

if ($result->num_rows === 0) {
    echo "Não foi possível encontrar a imagem."; // Se nenhum resultado for encontrado, exibe uma mensagem de erro
} else {
    $row = $result->fetch_assoc(); // Obtém os dados da imagem do resultado
    header("Content-type: image/gif"); // Define o cabeçalho HTTP para exibir uma imagem GIF
    echo $row['PES_IMG']; // Exibe o conteúdo da imagem armazenado no banco de dados
}

$stmt->close(); // Fecha a instrução preparada
$conn->close(); // Fecha a conexão com o banco de dados
?>