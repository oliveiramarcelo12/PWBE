<?php
function Farenheit($f){
    $celsius=($f-32)*5/9;
    return $celsius;
}
function Celsius($c){
    $farenheit=$c*9/5+32;
    return $farenheit;
}

?>