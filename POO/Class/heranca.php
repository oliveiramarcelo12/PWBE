<?php
//heranca
class Veiculo
{
    private $marca;
    private $modelo;
    public function Ligar()
    {
        echo "ligando...";
    }
    public function Desligar()
    {
        echo "desligando...";
    }
}
class Carro extends Veiculo
{
    private $numRodas;
    public function acelerarCarro()
    {
        echo "Acelerando o carro....";
    }
}
class Moto extends Veiculo
{
    private $numRodas;
    public function acelerarMoto()
    {
        echo "Acelerando a moto....";
    }
}
$carro = new Carro();
$carro->marca = "Honda";
echo $carro->marca;
