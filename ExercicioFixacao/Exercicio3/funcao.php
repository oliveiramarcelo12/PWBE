<?php
function salarioBruto($s,$h){
    $salarioBruto=$s*$h;
    return $salarioBruto;
}
$dIR=0.11;
$dINSS=0.8;
$dS=0.5;
function descontoINSS($dINSS){
   $descontoINSS= $salarioBruto-$dINSS;
   return $descontoINSS;


}
function descontoSindicato($dS){
    $descontoSindicato=$salarioBruto-$dS;
    return $descontoSindicato;
}



?>