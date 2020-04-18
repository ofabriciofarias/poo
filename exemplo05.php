<?php
//Encapsulamento

class Pessoa{

	public $nome = "Rasmus Lerdof";

	//Só quem pode acessar um atributo protected é quem está dentro da própria classe ou
	//as classes que herdam podem acessar os protected ou
	//através de métodos públicos que permitem enxergar os atributos por dentro do método.
	//vide o exemplo do método verDados()
	protected $idade = 48;
	//Só quem pode acessar é a classe ou
	//através de métodos públicos que permitem enxergar os atributos por dentro do método.
	//vide o exemplo do método verDados()
	private $senha = "12345";

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}


}

$objeto = new Pessoa();

echo $objeto->nome . "<br>";
//Erros
	//echo $objeto->idade . "<br>";
	//echo $objeto->senha . "<br>";

//Pelo método é possível apresentar os dados públicos, privados e protected através de um método público
$objeto->verDados();

?>