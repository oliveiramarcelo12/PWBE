<?php
if(isset($_POST['numero'])){
    $num = $_POST['numero'];
    numPosNeg($num);
}

function numPosNeg($num){
    if ($num > 0) {
        echo "Valor $num é Positivo";
    } elseif ($num < 0) {
        echo "Valor $num é Negativo";
    } else {
        echo "Igual a Zero";
    }
}
?>