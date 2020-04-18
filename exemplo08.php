<?php
//Interface
//Ajuda na integração de APIs

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

//Podendo implementar várias interfaces
class Civic implements Veiculo{

	public function acelerar($velocidade){
		echo "O veiculo acelerou até " . $velocidade . "<br>";
	}
	public function frenar($velocidade){
		echo "O veiculo frenou até " . $velocidade  . "<br>";
	}
	public function trocarMarcha($marcha){
		echo "O veiculo trocou para a marcha " . $marcha  . "<br>";
	}

}


$carro = new Civic();

$carro->acelerar(100);
$carro->frenar(70);
$carro->trocarMarcha(5);

?>