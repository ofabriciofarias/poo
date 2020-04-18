<?php
//Atributos, métodos e visibilidade

//Classe Carro
class Carro{

	//atributos com visibilidade privada
	private $modelo;
	private $motor;
	private $ano;

	//Encapsulamento
	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor(){
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno(){
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}
	//Fim do Encapsulamento

	//Outro método para exibir as informações.
	public function exibir(){
		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	}
}

//Instanciação de um Objeto
$gol = new Carro();

//Atribuição dos valores
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2012");

//Apresentação das informações
var_dump($gol->exibir());
echo "<br>";

print_r($gol->exibir());

echo "<br>";

echo $gol->exibir()['modelo'];

?>