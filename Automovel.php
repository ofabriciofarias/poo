<?php

/*
interface Veiculo{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}
*/

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