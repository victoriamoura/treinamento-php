<?php

### DEFINIÇÕES

// OBJETO / CLASSE
class Pessoa {

	// PROPRIEDADES
	// public - pode ser acessada por qualquer pessoa
	// private - só pode ser acessada por dentro da class
	// protectec - só pdoe ser acessada pela class e suas herdeiras

	private $nome;

	// SET - Método utilizado para definir variável nome
	public function setNome($novoNome){
		$this->nome;
	}

	// GET - Método utilizado para retornar variável nome
	public function getNome(){
		return $this->nome
	}
}

### UTILIZAÇÕES

// cria objeto _pessoa
$_pessoa = new Pessoa;

// informa valor para propriedade nome do objeto atravez do método setNome
$_pessoa->setNome("Victoria");

// imprime o retorno do valor da propriedade nome do objeto atrazer do método getNome
echo $_pessoa->getNome();

?>