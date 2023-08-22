<?php
//ponto flutuante
$bool =true;
echo"<br>";
if (is_bool($bool)): {
	echo "É uma variavel booleana";

	
}
else:{
	echo "Não é uma variavel booleana";
}endif;

echo "<br>";
class Alunos{
	public $nome;
	public function nomeAluno($nome){
		$this->$nome = $nome;

	}
}
$aluno = new Alunos();
$aluno->nomeAluno("João");
var_dump($aluno);

echo("<hr>");
//null
$saldo =NULL;
var_dump($saldo);







?>
