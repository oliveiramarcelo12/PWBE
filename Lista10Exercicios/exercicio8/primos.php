<?php
function primo($numero) {
    if ($numero <= 1) {
        return false;
    }
    if ($numero <= 3) {
        return true;
    }
    if ($numero % 2 == 0 || $numero % 3 == 0) {
        return false;
    }
    $i = 5;
    while ($i * $i <= $numero) {
        if ($numero % $i == 0 || $numero % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    return true;
}

$numerosPrimos = array();
for ($i = 2; $i <= 1000; $i++) {
    if (primo($i)) {
        $numerosPrimos[] = $i;
    }
}
?>