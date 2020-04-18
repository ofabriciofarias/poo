<?php
//Polimorfismo
//Método podendo ter várias formas em classes diferentes


abstract class Animal{

	public function falar(){
		return "Som";
	}

	public function mover(){
		return "Anda";
	}

}


class Cachorro extends Animal{

	//Método polimorfo. O comportamento mudou
	public function falar(){
		return "Late";
	}
}

class Gato extends Animal{

	public function falar(){
		return "Mia";
	}
}

class Passaro extends Animal{
	public function falar(){
		return "Canta";
	}
	//Polimorfismo, junta dos dois métodos com o parent::mover();
	public function mover(){

		return "Voa e " . parent::mover();
	}
}

echo "Cachorro <br>";
$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "---------<br>Gato <br>";
$frajola = new Gato();

echo $frajola->falar() . "<br>";
echo $frajola->mover() . "<br>";

echo "---------<br>Passaro <br>";
$ave = new Passaro();

echo $ave->falar() . "<br>";
echo $ave->mover() . "<br>";

?>