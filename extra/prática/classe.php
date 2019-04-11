<?php 

class Caneta {

    const BREAK_LINE = "\n";

    /* ATRIBUTOS */
    var $modelo;
    var $cor;
    var $ponta;
    var $tinta;
    var $tampa;

    public function __construct($modelo, $cor, $ponta, $tinta, $tampa) {
		$this->modelo = $modelo;
		$this->cor = $cor;
		$this->ponta = $ponta;
        $this->tinta = $tinta;
        $this->tampa = $tampa;
	}
    
    public function exibir() {
        echo self::BREAK_LINE .
        "Modelo: {$this->modelo}" . self::BREAK_LINE .
        "Cor:    {$this->cor}" . self::BREAK_LINE .
        "Ponta:  {$this->ponta}" . self::BREAK_LINE .
        "Tinta:  {$this->tinta}%"  . self::BREAK_LINE .
        "Status: {$this->checaTampa()}" .
        self::BREAK_LINE;
    }

    public function tampar() {
        if ($this->tampa == true) {
            echo self::BREAK_LINE .
            "Sua caneta já está tampada..." . 
            self::BREAK_LINE;
        } else {
            $this->tampa = true;
            echo self::BREAK_LINE .
            "Sua caneta foi tampada..." .
            self::BREAK_LINE;
        }
    }

    public function destampar() {
        if ($this->tampa == false) {
            echo self::BREAK_LINE .
            "Sua caneta já está destampada..." .
            self::BREAK_LINE;
        } else {
            $this->tampa = false;
            echo self::BREAK_LINE .
            "Sua caneta foi destampada..." . 
            self::BREAK_LINE;
        }
    }

    public function checaTampa() {
        if ($this->tampa == true) {
            return "Tampada";
        } else {
            return "Destampada";
        } 
    }

    public function checaTinta() {
        if ($this->tinta != 0){
            echo "Tinta:  {$this->tinta}%" .
            self::BREAK_LINE;
        } else {
            echo self::BREAK_LINE .
            "ATENÇÃO: A tinta da sua caneta acabou." .
            self::BREAK_LINE .
            "Tinta:  {$this->tinta}%" .
            self::BREAK_LINE;
        }
    }
    
    public function diminuiTinta() {
        $this->tinta = $this->tinta - 50;
    }

    public function reporTinta() {
        $this->tinta = 100;
        echo self::BREAK_LINE .
        "Parabéns você repôs a tinta!" .
        self::BREAK_LINE;
        $this->checaTinta();
    }
            
    public function rabiscar() {     
        if ($this->tinta != 0) {
            if ($this->tampa == true) {
                echo self::BREAK_LINE .
                "Destampe a caneta para rabiscar!" .
                self::BREAK_LINE;
            } else {
                echo self::BREAK_LINE .
                "Você rabiscou o papel de cor {$this->cor} :)" .
                self::BREAK_LINE;
                $this->diminuiTinta();
                $this->checaTinta();
            }
        } else {
            $this->checaTinta();
        }
    }
}


$caneta_1 = new Caneta('Bic', 'azul', 1.0, 100, true);
$caneta_1->exibir();

$caneta_1->tampar();
$caneta_1->destampar();
$caneta_1->rabiscar();
$caneta_1->rabiscar();
$caneta_1->reporTinta();
$caneta_1->rabiscar();
$caneta_1->tampar();
$caneta_1->rabiscar();
$caneta_1->tampar();
$caneta_1->destampar();
$caneta_1->destampar();

?>