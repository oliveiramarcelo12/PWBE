<?php
class Pessoa{
    // definição das carcteristicas/atributos
    public $nome;
    public $idade;

   //definindo a ação/métodos
    public function Falar(){
        echo $this->nome. " de " . $this->idade . " anos, está Falando...";

    }
}
//criando um objeto do tipo pessoa - instancia de objeto
$p = new Pessoa();
$p->nome="Joãozinho";
$p->idade="15";

//var_dump($p);

$p->Falar();
//echo "<br> Nome:". $p->nome;
//echo "<br> Idade:". $p->idade;

?>