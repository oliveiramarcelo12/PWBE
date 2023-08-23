<?php
if (!defined('M_PI')) {
    define('M_PI', 3.14159265358979323846);
}

function Perimetro($r){
  $perimetro=2*M_PI*$r;
  return $perimetro;
 
}
function area($r){
    $area =M_PI*$r*$r;
    return $area;
   
  }


?>