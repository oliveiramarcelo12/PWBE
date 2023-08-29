<?php
include "funcao.php";
$f = $_POST['grausF'];
echo "Celsius=" . Farenheit($f). "<br>";
$c = $_POST['grausC'];
echo "Farenheit=" . Celsius($c). "<br>";
?>