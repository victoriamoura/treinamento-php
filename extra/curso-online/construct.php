<?php

### DEFINIÇÕES

// OBJETO / CLASSE
class Pessoa {

	// PROPRIEDADES
	// public - pode ser acessada por qualquer pessoa
	// private - só pode ser acessada por dentro da class
	// protectec - só pdoe ser acessada pela class e suas herdeiras

	private $nome;

	// CONSTRUCT - recebe valores informados diretamente na construção de um objeto
	public function __construct($seu_nome){
		$this->nome = $seu_nome;
	}

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

// cria objeto _pessoa e envia valor diretamente através da função construct
$_pessoa = new Pessoa("Victoria");

// imprime o retorno do valor da propriedade nome do objeto atrazer do método getNome
echo $_pessoa->getNome();

?>