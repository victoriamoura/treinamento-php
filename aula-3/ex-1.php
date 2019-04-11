<?php

#-------------
# OBJETO LIVRO
#-------------

class Livro {

    const BREAK_LINE = "\n";

	// ATRIBUTOS
	var	$livTitulo;
	var	$livAutor;
	var	$livTotalPag; 
	var	$livAtualPag;
	var	$livAberto;

	public function __construct($titulo, $autor, $totalPaginas) {
		$this->livTitulo = $titulo;
		$this->livAutor = $autor;
		$this->livAtualPag = 0;
		$this->livTotalPag = $totalPaginas;
		$this->livAberto = false;
	}

	public function sobreLivro() {
		echo self::BREAK_LINE .
		"Título:  {$this->livTitulo}" . self::BREAK_LINE .
		"Autor:   {$this->livAutor}" . self::BREAK_LINE .
		"Páginas: {$this->livTotalPag}" . self::BREAK_LINE;
	}
}

#--------------
# OBJETO PESSOA
#--------------

class Pessoa extends Livro {

    const BREAK_LINE = "\n";

	// ATRIBUTOS
	var	$pesNome;
	var	$pesIdade;
	var	$pesSexo;

	public function __construct($nome, $idade, $sexo) {
		$this->pesNome = $nome;
		$this->pesIdade = $idade;
		$this->pesSexo = $sexo;
	}
	
	public function sobrePessoa() {
		echo self::BREAK_LINE .
		"Nome:  {$this->pesNome}" . self::BREAK_LINE .
		"Idade: {$this->pesIdade}" . self::BREAK_LINE .
		"Sexo:  {$this->pesSexo}" . self::BREAK_LINE;
	}

	public function abrirLivro($livro) {

		if ($livro->livAberto == true) {
			echo  self::BREAK_LINE .
			"ATENÇÃO: O livro -{$livro->livTitulo}- já está aberto" .self::BREAK_LINE;
			
		} else {
			$livro->livAberto = true;

			if ($livro->livAtualPag == 0) {
				echo  self::BREAK_LINE .
				"{$this->pesNome} começou a ler" . self::BREAK_LINE . 
				"Livro: {$livro->livTitulo}" . self::BREAK_LINE .
				"Página: {$livro->livAtualPag}" . self::BREAK_LINE;
			} else {
				echo  self::BREAK_LINE .
				"{$this->pesNome} voltou a ler" . self::BREAK_LINE . 
				"Livro: {$livro->livTitulo}" . self::BREAK_LINE .
				"Página: {$livro->livAtualPag}" . self::BREAK_LINE;
			}
		}
	}

	public function fecharLivro($livro) {

		if ($livro->livAberto == false) {
			echo  self::BREAK_LINE .
			"ATENÇÃO: O livro -{$livro->livTitulo}- já está fechado" .
			self::BREAK_LINE;
		} else {
			$livro->livAberto = false;
			echo  self::BREAK_LINE .
			"{$this->pesNome} fechou o livro" . self::BREAK_LINE . 
			"Livro: {$livro->livTitulo}" . self::BREAK_LINE;
		}

	}

	public function passarPagina($livro) {
		$livro->livAberto = true;

		if ($livro->livAtualPag < $livro->livTotalPag) {
			$livro->livAtualPag += 1;

			echo  self::BREAK_LINE .
			"{$this->pesNome} passou a página" . self::BREAK_LINE . 
			"Livro: {$livro->livTitulo}" . self::BREAK_LINE .
			"Página: {$livro->livAtualPag}" . self::BREAK_LINE;

		} else {
			//$livro->livAtualPag = 0;
			echo  self::BREAK_LINE .
			"ATENÇÃO: {$this->pesNome} finalizou o livro" . self::BREAK_LINE . 
			"Livro: {$livro->livTitulo}" . self::BREAK_LINE;
		}
	}

	public function voltarPagina($livro) {
		$livro->livAberto = true;

		if ($livro->livAtualPag == 0) {
			echo  self::BREAK_LINE .
			"ATENÇÃO: {$this->pesNome} está no começo do livro" . self::BREAK_LINE . 
			"Livro: {$livro->livTitulo}" . self::BREAK_LINE;
		} else {
			$livro->livAtualPag -= 1;
			echo  self::BREAK_LINE .
			"{$this->pesNome} voltou a página" . self::BREAK_LINE . 
			"Livro: {$livro->livTitulo}" . self::BREAK_LINE .
			"Página: {$livro->livAtualPag}" . self::BREAK_LINE;
		}
	}
}

$pessoa_1 = new Pessoa('Victoria', 25, 'F');
$pessoa_1->sobrePessoa();

$livro_1 = new Livro('PHP OO', 'Victoria', 3);
$livro_1->sobreLivro();

$pessoa_1->abrirLivro($livro_1);
$pessoa_1->abrirLivro($livro_1); // erro: livro já aberto

$pessoa_1->fecharLivro($livro_1);
$pessoa_1->fecharLivro($livro_1); // erro: livro já fechado

$pessoa_1->abrirLivro($livro_1);
$pessoa_1->passarPagina($livro_1);
$pessoa_1->passarPagina($livro_1);
$pessoa_1->passarPagina($livro_1);
$pessoa_1->fecharLivro($livro_1);

?>