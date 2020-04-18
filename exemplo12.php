<?php

//Busca de forma inteligente os caminhos utilizando o spl_autoload_register
function incluirClasses($nomeClasse){
	if(file_exists($nomeClasse. ".php") === true){
		require_once($nomeClasse.".php");
	}
}

//Passo o nome da função que inclui as classes
spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasse){
	if(file_exists("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
		require_once("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
	}
});

//A classe abstrata Automovel está vindo de outro diretório
$carro = new DelRey();

$carro->acelerar(100);


?>