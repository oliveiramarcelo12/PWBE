<?php
if (isset($_POST['lado1']) && isset($_POST['lado2']) && isset($_POST['lado3'])) {
    $lado1 = floatval($_POST['lado1']);
    $lado2 = floatval($_POST['lado2']);
    $lado3 = floatval($_POST['lado3']);

    // Verifica se os valores representam um triângulo
    if ($lado1 < ($lado2 + $lado3) && $lado2 < ($lado1 + $lado3) && $lado3 < ($lado1 + $lado2)) {
        echo "Os valores representam os lados de um triângulo.<br>";

        // Verifica o tipo de triângulo
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "É um triângulo equilátero.";
        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "É um triângulo isósceles.";
        } else {
            echo "É um triângulo escaleno.";
        }
    } else {
        echo "Os valores NÃO representam os lados de um triângulo.";
    }
}
?>     