<?php
include "funcao.php";
$raio =$_POST['raio'];
echo "Perimetro= " . Perimetro($raio) . "<br>";
echo "Área= " . area($raio) . "<br>";
?>