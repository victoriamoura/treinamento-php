<?php

/*

CONSTANTES MÁGICAS
===================

__LINE__
Retorna o número da linha do script na qual ela foi declarada.

__FILE__
Retorna o caminho do arquivo PHP.

__DIR__
Retorna o diretório.

__FUNCTION__
Retorna a function a qual foi declarada.

__CLASS__
Retorna a class a qual foi declarada.

__METHOD__
Retorna a classe e o método a qual foi declarada.

__NAMESPACE__
Retona o namespace a qual foi declarada.

*/

class Pessoa{

	public $nome;
	public const ESPECIE = "Humana";


	public function __construct($tmpNome){
		$this->nome = $tmpNome;

		echo "Objeto " . __CLASS__ . " foi instanciado!";
	}

	public function getNome(){
		return $this->nome;
	}

	public function getDetalhes(){
		return "{$this->nome} é uma " . $this::ESPECIE;
	}
}

$pessoa = new Pessoa ("Victoria");

?>