<?php

#--------------
# OBJETO PESSOA
#--------------

class Leitor {

	// VARIÁVEIS DO OBJETO
	public $nome, $idade, $sexo, $dataNasc;

	// FUNÇÃO: CONSTROI OBJETO
	public function __construct($nome, $idade, $sexo, $dataNasc) {
		$this->nome = $nome;
		$this->idade = $idade;
		$this->sexo = $sexo;
		$this->dataNasc = $dataNasc;
	}
}

#-------------
# OBJETO LIVRO
#-------------

class Livro extends Leitor {

	// VARIÁVEIS DO OBJETO
	public $leitor;
	public
	$titulo,
	$autor,
	$totalPaginas,
	$paginaAtual,
	$aberto;

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


// Constroi Objeto: Novo livro
$livro1 = new Livro('Livro de PHP', 'Victoria', 800, );

// Informa detalhes do livro
echo $livro1->exibeDetalhes();


?>