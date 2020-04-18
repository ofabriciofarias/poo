<?php



require_once("Veiculo.php");

abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){
		echo "Acelerar para " . $velocidade . "<br>";
	}
	public function frenar($velocidade){
		echo "Frenar para " . $velocidade . "<br>";
	}
	public function trocarMarcha($marcha){
		echo "Trocar marcha para " . $marcha . "<br>";
	}

}

?>