<?php
// functions.php

function calcularTinta($area) {
    // Acrescentar 10% de folga
    $areaComFolga = $area * 1.10;
    
    // Cálculo da quantidade de litros necessários
    $litrosNecessarios = $areaComFolga / 3; // 1 litro para cada 3 metros quadrados
    
    return $litrosNecessarios;
}

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
?>