<?php
$nota1 = 3.1;
$nota2 = 1.3;
$nota3 = 4.6;
$nota4 = 3.5;
$media = ($nota1+$nota2+$nota3+$nota4)/4;
if ($media<=7) {
	echo "Aprovado <br>";
}
elseif ($media>=5) {
	echo "Exame <br>";
}
elseif ($media>5) {
	echo "Reprovado";
}
	




?>