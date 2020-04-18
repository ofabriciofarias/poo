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

class Programador extends Pessoa{

	public function verDados(){

			//Verifica que os atributos do método estão vindo da classe Programador.
			echo get_class($this) . "<br>";

			echo $this->nome . "<br>";
			echo $this->idade . "<br>";
			echo $this->senha . "<br>";
		}


}

$objeto = new Pessoa();
echo " <br> Objeto da Classe Pessoa <br>";
echo $objeto->nome . "<br>";
//Erros
	//echo $objeto->idade . "<br>";
	//echo $objeto->senha . "<br>";

//Pelo método é possível apresentar os dados públicos, privados e protected através de um método público
$objeto->verDados();

$objeto2 = new Programador();

echo " <br> Objeto da Classe Programador <br>";
echo $objeto2->nome . "<br>";
//Erros
	//echo $objeto2->idade . "<br>";
	//	echo $objeto2->senha . "<br>";

//Pelo método é possível apresentar os dados públicos, privados (da classe Programador) e protected através de um método público.
//Neste caso, o atributo senha que é da classe Pessoa não existe, mesmo a classe Programador herdando de Pessoa.
//Este somente existe na classe Pessoa por ser do tipo de visibilidade private.
$objeto2->verDados();

?>