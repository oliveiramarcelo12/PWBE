<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "pessoa";

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM PESSOA");

while ($row = mysqli_fetch_assoc($result)) {
    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['PES_IMG']) . '" /><br>';
}

mysqli_close($conn);
?>
