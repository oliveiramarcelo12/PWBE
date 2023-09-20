<?php
include 'functions.php';

if (isset($_POST['area']) && is_numeric($_POST['area'])) {
    // Obter a área a ser pintada
    $areaParaPintar = floatval($_POST['area']);

    // Calcular a quantidade de tinta necessária
    $litrosNecessarios = calcularTinta($areaParaPintar);

    // Calcular o preço ao comprar apenas latas de 18 litros
    list($latasNecessarias, $precoLatas) = calcularPreco($litrosNecessarios, "lata");

    // Calcular o preço ao comprar apenas galões de 3,6 litros
    list($galoesNecessarios, $precoGaloes) = calcularPreco($litrosNecessarios, "galao");

    // Calcular o preço misturando latas e galões para obter o preço mais baixo
    $latasInteiras = floor($litrosNecessarios / 18);
    $litrosRestantes = $litrosNecessarios % 18;
    $galoesNecessarios = ceil($litrosRestantes / 3.6);
    $precoMisturado = ($latasInteiras * 80) + ($galoesNecessarios * 25);

    // Exibir os resultados
    echo "Para pintar {$areaParaPintar} metros quadrados, você precisará de {$litrosNecessarios} litros de tinta. <br>" .  PHP_EOL;
    echo "Opções de compra: <br>" . PHP_EOL;
    echo "1. Comprar apenas latas de 18 litros: {$latasNecessarias} latas ({$precoLatas} reais) <br>" . PHP_EOL;
    echo "2. Comprar apenas galões de 3,6 litros: {$galoesNecessarios} galões ({$precoGaloes} reais) <br>" . PHP_EOL;
    echo "3. Misturar latas e galões: {$latasInteiras} latas, {$galoesNecessarios} galões ({$precoMisturado} reais) <br>" . PHP_EOL;
} else {
    // Caso o valor da área não seja válido
    echo "Por favor, insira um valor numérico válido para a área.";
}
?>
