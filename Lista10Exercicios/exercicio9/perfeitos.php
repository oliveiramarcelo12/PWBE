<?php
function isNumeroPerfeito($numero) {
    $somaFatores = 1; // Inicializa com 1 porque 1 é sempre um fator
    
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $somaFatores += $i;
            $outroFator = $numero / $i;
            if ($outroFator != $i) {
                $somaFatores += $outroFator;
            }
        }
    }
    
    return $somaFatores == $numero;
}

$numerosPerfeitos = array();
for ($numero = 2; $numero <= 1000; $numero++) {
    if (isNumeroPerfeito($numero)) {
        $numerosPerfeitos[] = $numero;
    }
}
?>
