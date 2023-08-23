<?php
function soma($a,$b){
    return ($a+$b);
}

function potencia($base,$expoente){
    $resultado=1;
    while($expoente>0){
        $resultado *= $base;
        $expoente--;
    }
    return $resultado;
    
}
$potencia = potencia($base, $expoente);
function fatorial($num) {
    if ($num < 0) {
        return "Não é possível calcular o fatorial de um número negativo.";
    } elseif ($num == 0 || $num == 1) {
        return 1;
    } else {
        $fatorial = 1;
        while ($num > 1) {
            $fatorial *= $num;
            $num--;
        }
        return $fatorial;
    }
}

$resultado = fatorial($num);

?>