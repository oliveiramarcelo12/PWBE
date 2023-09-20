<?php
function calcularConsumoCusto($quilometragem, $consumo, $preco) {
    // Calcula o consumo médio em km/l
    $consumoMedio = $quilometragem / $consumo;

    // Calcula o custo por quilômetro
    $custoPorKm = $preco / $consumoMedio;

    return array($consumoMedio, $custoPorKm);
}
?>