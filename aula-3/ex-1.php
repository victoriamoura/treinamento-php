<?php

#-------------
# OBJETO LIVRO
#-------------

class Livro {

	// VARIÁVEIS DO OBJETO
	public
	$titulo,
	$autor,
	$totalPaginas,
	$paginaAtual,
	$aberto,
	$leitor;

	// FUNÇÃO: CONSTROI OBJETO
	public function __construct($titulo, $autor, $totalPaginas) {
		$this->titulo = $titulo;
		$this->autor = $autor;
		$this->totalPaginas = $totalPaginas;
	}

	// DETALHES DO LIVRO
	public function exibeDetalhes() {
		return "<br>
		Título do Livro: {$this->titulo} <br>
		Autor: {$this->autor} <br>
		Páginas: {$this->totalPaginas} <br>";
	}
}

#--------------
# OBJETO PESSOA
#--------------

class Pessoa {

	// VARIÁVEIS DO OBJETO
	protected $nome, $idade, $sexo, $dataNasc;

	// FUNÇÃO: CONSTROI OBJETO
	public function __construct($nome, $idade, $sexo, $dataNasc) {
		$this->nome = $nome;
		$this->idade = $idade;
		$this->sexo = $sexo;
		$this->dataNasc = $dataNasc;
	}


	public function checaAniversario($dataNasc) {

	}
}

// Constroi Objeto: Novo livro
$livro1 = new Livro('Livro de PHP', 'Victoria', 800, );

// Informa detalhes do livro
echo $livro1->exibeDetalhes();


?>