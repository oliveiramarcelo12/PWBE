<?php
// Função para calcular a quantidade necessária de latas ou galões
function calcularTinta($area) {
    // Acrescentar 10% de folga
    $areaComFolga = $area * 1.10;
    
    // Cálculo da quantidade de litros necessários
    $litrosNecessarios = $areaComFolga / 3; // 1 litro para cada 3 metros quadrados
    
    return $litrosNecessarios;
}

// Função para calcular o preço com base em latas ou galões
function calcularPreco($litros, $tipo) {
    if ($tipo == 'lata') {
        // Uma lata contém 18 litros
        $latasNecessarias = ceil($litros / 18);
        $preco = $latasNecessarias * 80;
        return array($latasNecessarias, $preco);
    } elseif ($tipo == 'galao') {
        // Um galão contém 3,6 litros
        $galoesNecessarios = ceil($litros / 3.6);
        $preco = $galoesNecessarios * 25;
        return array($galoesNecessarios, $preco);
    }
    return array(0, 0);
}

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
    echo "Para pintar {$areaParaPintar} metros quadrados, você precisará de {$litrosNecessarios} litros de tinta. <br>" . PHP_EOL;
    echo "Opções de compra: <br>" . PHP_EOL;
    echo "1. Comprar apenas latas de 18 litros: {$latasNecessarias} latas ({$precoLatas} reais) <br>" . PHP_EOL;
    echo "2. Comprar apenas galões de 3,6 litros: {$galoesNecessarios} galões ({$precoGaloes} reais) <br>" . PHP_EOL;
    echo "3. Misturar latas e galões: {$latasInteiras} latas, {$galoesNecessarios} galões ({$precoMisturado} reais ) <br>" . PHP_EOL;
} else {
    // Caso o valor da área não seja válido
    echo "Por favor, insira um valor numérico válido para a área.";
}
?>
