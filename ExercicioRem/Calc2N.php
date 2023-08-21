<?php

$n1 = 36;
$n2 = 6;

function soma($n1, $n2) {
    return $n1 + $n2;
}
function sub($n1, $n2) {
    return $n1 - $n2;
}
function mult($n1, $n2) {
    return $n1 * $n2;
}
function div($n1, $n2) {
    if ($n2 != 0) {
        return $n1 / $n2;
    } else {
        return "Não dividirás por Zero!!";
    }
}

echo "<h1>Operações Matemáticas</h1>";
echo "<h3>Valores Digitados:</h3>";
echo "<h4>N°1: " . $n1 . "</h4>";
echo "<h4>N°2: " . $n2 . "</h4> <br>";
echo "<h3>Resultados:</h3>";
echo "<h4>Resultado da Soma é: " . soma($n1, $n2) . "</h4>";
echo "<h4>Resultado da Subtração é: " . sub($n1, $n2) . "</h4>";
echo "<h4>Resultado da Multiplicação é: " . mult($n1, $n2) . "</h4>";
echo "<h4>Resultado da Divisão é: " . div($n1, $n2) . "</h4>";


?>






