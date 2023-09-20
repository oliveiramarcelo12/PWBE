<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Calculadora de Porcentagens</h1>

<form method="post" action="">
    <label for="valor">Digite um valor:</label>
    <input type="text" id="valor" name="valor" required>
    <br>
    <input type="submit" value="Calcular">
</form>

<?php
include 'calculadora.php'; // Inclui calculadora.php para realizar os cálculos
include 'resultado.php'; // Inclui resultados.php para exibir os resultados
?>
</body>
</html>