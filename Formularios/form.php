<?php
include "funcao.php";
//$nome =$_GET['nome'];
//$email =$_GET['email'];
//$endereco =$_GET['endereco'];
//$numero =$_GET['numero'];$nome =$_GET['nome'];
$nome =$_POST['nome'];
$email =$_POST['email'];
$endereco =$_POST['endereco'];
$numero =$_POST['numero'];
$x =$_POST['num1'];
$y =$_POST['num2'];
echo "Soma: " . soma($x,$y) . "<br>";
$n =$_POST['base'];
$m =$_POST['expoente'];
echo "Potência:" . potencia($n,$m) . "<br>";
$f =$_POST['fatorial'];
echo "Fatorial:" . fatorial($f) . "<br>";


echo "Oi, Nome: $nome.";
echo "<br>";
echo "Email:$email.<br>";
echo "Endereço: $endereco.<br>";
echo "Telefone: $numero.<br>";

?>