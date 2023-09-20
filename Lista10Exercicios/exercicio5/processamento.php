<?php
if (isset($_POST['quilometragem']) && isset($_POST['consumo']) && isset($_POST['preco'])) {
    include 'funcao.php';

    $quilometragem = $_POST['quilometragem'];
    $consumo = $_POST['consumo'];
    $preco = $_POST['preco'];

    list($consumoMedio, $custoPorKilometro) = calcularConsumoCusto($quilometragem, $consumo, $preco);

    echo "Consumo médio: $consumoMedio km/l<br>";
    echo "Custo por quilômetro: R$ $custoPorKilometro";
}
?>
