<?php
$host = "localhost"; // Nome do servidor do banco de dados MySQL
$username = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL
$db = "pessoa"; // Nome do banco de dados

$conn = mysqli_connect($host, $username, $password, $db); // Cria uma nova conexão MySQLi

if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error()); // Verifica a conexão com o banco de dados e trata erros, se houverem
}

$result = mysqli_query($conn, "SELECT * FROM PESSOA"); // Executa uma consulta SQL para selecionar todos os registros da tabela PESSOA

while ($row = mysqli_fetch_assoc($result)) { // Itera pelos resultados da consulta
    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['PES_IMG']) . '" /><br>'; // Exibe cada imagem convertida para base64
}

mysqli_close($conn); // Fecha a conexão com o banco de dados após a conclusão
?>
