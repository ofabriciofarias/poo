<?php
//Uma classe Abstrata não pode ser instanciada
//A classe abstrata é herdada por outra classe

interface Veiculo{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo{
	public function acelerar($velocidade){
		echo "Aumenta velocidade para " . $velocidade . "<br>";
	}
	public function frenar($velocidade){
		echo "Reduz a velocidade para " . $velocidade . "<br>";
	}
	public function trocarMarcha($marcha){
		echo "Troca a marcha para " . $marcha . "<br>";
	}
}

class DelRey extends Automovel{
	public function empurrar(){

	}
}

$carro = new DelRey();

$carro->acelerar(200);

var_dump($carro);

?>