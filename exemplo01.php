<?php

//Classe Pessoa
class Pessoa{
	//Atributos
	public $nome;


	public function falar(){
		return "O meu nome é " . $this->nome;
	}

}

$pessoa = new Pessoa();

$pessoa->nome = "Classe Pessoa";

echo $pessoa->falar() . "<br>";
?>