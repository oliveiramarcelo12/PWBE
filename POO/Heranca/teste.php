<?php
//require_once 'veiculo.php';
require_once 'carro.php';
require_once 'veiculo.php';
require_once 'moto.php';



$veiculo = new Moto();
$veiculo = new Moto();                                                                           
$veiculo->marca = "Honda";
echo $veiculo->marca . "<br>";

$veiculo->setModelo('City');
echo $veiculo->getModelo() . "<br>";



?>