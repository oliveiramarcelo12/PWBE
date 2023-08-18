<?php
$n1=10;
$n2=10;
$n3=10;
$n4=6;
$soma=$n1+$n2+$n3+$n4;
function calcularMedia($soma){
	$media=$soma/4;
	return $media;


}
$media=calcularMedia($soma);
if ($media>=7.0) {
	echo "Aprovado";

}
elseif($media>=6.0){
   echo "Exame";
}
else{
	echo "Reprovado";
}


?>