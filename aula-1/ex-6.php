<?php

# EXERCICIO 06

# Ler vários números e informar quantos números entre 100 e 200 foram digitados. Se o valor 0 for lido encerrar a execução.

$arr = [2, 150, 1, 5, 170];


echo "Valores: <br>";

$contador = 0;

foreach($arr as $valor) {

	if ( $valor > 100 && $valor < 200 ) {

		echo "$valor <br>";

		$contador++;

	} else if ( $valor == 0 ) {

		break;
	}
}

echo "<br> Quantidade: $contador";

?>