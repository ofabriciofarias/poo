<?php
//AutoLoad: permite carregar as classes sem precisar do require ou require_once
//As funcões ficam dentro de um arquivo de configuração e lá fica a configuração
//para a classe
/*
Esse exemplo utiliza as classes DelRey, Automovel e a interface Veiculo
*/

require_once("DelRey.php");
//function __autoload($nomeClasse){
/*function __spl_autoload_register($nomeClasse){

	//var_dump($nomeClasse);
	require_once($nomeClasse);
	
}*/

$carro = new DelRey();

$carro->acelerar(100);


?>