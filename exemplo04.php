<?php
//Métodos mágicos/Método Construtor

class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	//Método Construtor da classe Endereco
	public function __construct($a, $b, $c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	//Método Destruct 
	//Funciona para remover da mémoria o Objeto ou quando o progamador decide tirar da memória pelo unset.
	public function __destruct(){
		var_dump("Destruir o objeto");
	}

	//Método pra converter para String para poder imprimir no echo
	public function __toString(){
		return $this->logradouro . ", " . $this->numero . " , " . $this->cidade;
	}

	//Encapsulamento dos Métodos Privados
	public function getLogradouro(){
		return $this->logradouro;
	}

	public function setLogradouro($logradouro){
		$this->logradouro = $logradouro;
	}

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setCidade(){
		$this->cidade = $cidade;
	} 

	//Encapsulamento dos Métodos Privados
}

$novoEnd = new Endereco("Rua 23 de Nov", "2324", "Cametá");

var_dump($novoEnd);

echo "<br>". $novoEnd . "<br>";

unset($novoEnd);

//Mostra NULL, pois já está NULL.
//var_dump($novoEnd);

?>