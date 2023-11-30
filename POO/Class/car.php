<?php
class Carro {
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($m) {
        $this->marca = $m;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getCor() {
        return $this->cor;
    }

    public function setCor($m) {
        $this->cor = $m;
    }
}

$carro = new Carro("Toyota", "Hilux");

echo "Marca: " . $carro->getMarca() . "<br>";
echo "Modelo: " . $carro->getModelo() . "<br>";

$carro2 = new Carro("", ""); 
$carro2->setMarca(readline("Digite a Marca do veículo:"));
$carro2->setModelo(readline("Digite o Modelo do veiculo"));

?>
