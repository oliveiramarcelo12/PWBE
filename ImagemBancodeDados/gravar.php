<?php
$imagem = $_FILES["imagem"];
$host = "localhost";
$username = "root";
$password = "";
$db = "pessoa";

if ($imagem != NULL) {
    $nomeFinal = time() . '.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal);

        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

        $conn = mysqli_connect($host, $username, $password, $db);
        if (!$conn) {
            die("Impossível Conectar ao Banco de Dados: " . mysqli_connect_error());
        }

        $query = "INSERT INTO PESSOA (PES_IMG) VALUES ('$mysqlImg')";
        if (mysqli_query($conn, $query)) {
            unlink($nomeFinal);
            header("Location: exibir.php");
            exit;
        } else {
            echo "Erro ao inserir imagem no banco de dados: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
} else {
    echo "Você não realizou o upload de forma satisfatória.";
}
?>
