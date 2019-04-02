<?php

#-------------
# OBJETO ALUNO
#-------------

class Aluno{
	CONST BREAK_LINE = "<br>";

	// VARIÁVEIS DO OBJETO
	public $nome;
	public $nota1;
	public $nota2;
	public $media;

	// FUNÇÃO: CONSTROI OBJETO
	public function __construct($nome, $nota1, $nota2) {
		$this->nome = $nome;
		$this->nota1 = $nota1;
		$this->nota2 = $nota2;
		$this->media = ($nota1 + $nota2) / 2;
	}

	// DETALHES DOS ALUNOS
	public function exibeDetalhes() {
		return "<br>
		Aluno: {$this->nome} <br>
		Nota 1: {$this->nota1} <br>
		Nota 2: {$this->nota2} <br>";
	}

	// CALCULA MÉDIA DE NOTAS
	public function exibeMedia(){
		echo "<br> Média de {$this->nome}: {$this->media}";
	}
}


// Constroi Objeto: Novo aluno
$aluno1 = new Aluno('Victoria', 10, 8);

// Informa detalhes do aluno
echo $aluno1->exibeDetalhes();

//Informa média do aluno
$aluno1->exibeMedia();


?>