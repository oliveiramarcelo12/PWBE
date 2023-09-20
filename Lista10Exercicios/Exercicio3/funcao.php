<?php
function divisaoPorSubtracoesSucessivas($num1, $num2) {
   // Certifique-se de que $num2 não seja zero
   if ($num2 == 0) {
       return "Não é possível dividir por zero.";
   }

   // Troca os números se $num1 for menor que $num2
   if ($num1 < $num2) {
       list($num1, $num2) = array($num2, $num1);
   }

   $resultado = 0;

   while ($num1 >= $num2) {
       $num1 -= $num2;
       $resultado++;
   }

   return $resultado;
}


?>