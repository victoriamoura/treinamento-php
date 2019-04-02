<?php

#-------------
# OBJETO ALUNO
#-------------

class Aluno {

	CONST BREAK_LINE = "<br>";

	// VARIÁVEIS DO OBJETO
	protected $_nome, $_atvs = [], $_media = 0;

	// FUNÇÃO: CONSTROI OBJETO
	public function __construct(string $nome) {
		$this->_nome = $nome;
	}

	// ADICIONA NOVA ATIVIDADE
	public function addAtv(float $med, float $max, float $nota) {
		$atv = new Atividade($med, $max, $nota);
		$this->_atvs[] = $atv;
		$this->calcMedia();
		return $this;
	}

	// CALCULA MÉDIA
	private function calcMedia() {
		$total = 0;

		foreach ($this->_atvs as $atv) {
			$total += $atv->getNotaAtv();
		}

		$this->_media = $total/count($this->_atvs);
	}

	// EXIBE DETALHES DO ALUNO
	public function exibeDetalhes() {
		$response = "Aluno: {$this->_nome}" . self::BREAK_LINE;

		foreach ($this->_atvs as $key => $value) {
			$response .= "Nota ".++$key.": {$value->getNotaAtv()}" . self::BREAK_LINE;
		}

		return $response;
	}

	// EXIBE MÉDIA DE NOTAS
	public function exibeMedia(){
		echo self::BREAK_LINE . "Média de {$this->_nome}: {$this->_media}";
	}
}

#-----------------
# OBJETO ATIVIDADE
#----------------

class Atividade {

	// VARIÁVEIS DO OBJETO
	private $_med, $_max, $_nota;

	// FUNÇÃO: CONSTROI OBJETO
	public function __construct(float $med, float $max, float $nota) {
		$this->_med  = $med;
		$this->_max  = $max;
		$this->_nota = $nota;
	}

	// FUNÇÃO: CHECA SE APROVADO
	public function isAprovado() {
		return $this->_nota > $this->_med;
	}

	// FUNÇÃO: PEGA MÉDIA DA ATIVIDADE
	public function getMedAtv() {
		return $this->_med;
	}

	// FUNÇÃO: PEGA MÁXIMA DA ATIVIDADE
	public function getMaxAtv() {
		return $this->_max;
	}

	// FUNÇÃO: PEGA NOTA DA ATIVIDADE
	public function getNotaAtv() {
		return $this->_nota;
	}
}


// Constroi objeto: Aluno
$aluno1 = new Aluno('Victoria');

// Constroi objeto: Atividade de Aluno
$aluno1->addAtv(6, 10, 8)
->addAtv(6, 10, 5)
->addAtv(6, 10, 9);

// Informa detalhes do aluno
echo $aluno1->exibeDetalhes();

// Informa média do aluno
$aluno1->exibeMedia();


?>