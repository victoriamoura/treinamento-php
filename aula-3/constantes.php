<?php

class Pessoa{

	public $nome;
	const ESPECIE = "Humana";


	public function __construct($tmpNome){
		$this->nome = $tmpNome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getDetalhes(){
		return "{$this->nome} é uma " . $this::ESPECIE;
	}
}


$pessoa = new Pessoa ("Victoria");

//imprime constante
//echo $pessoa::ESPECIE;

echo $pessoa->getDetalhes();

?>