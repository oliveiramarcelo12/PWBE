<?php
$arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

echo "Os Números pares são: ";
foreach ($arr as $valor) {
    if ($valor % 2 == 0) {
        echo "$valor, ";
    }
}


?>