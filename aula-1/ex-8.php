<?php

# EXERCICIO 08

# Criar 2 vetores com 10 números inteiros cada. Gerar e imprimir um vetor dos números não comuns aos e vetores

$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = [2, 6, 9, 10, 13, 15, 23, 27, 29, 50];
$arrFinal = array();

#----------------------------
# COMPARA VETOR 1 COM VETOR 2
#----------------------------

foreach($arr1 as $valor1) {

	$valorIgual = false;

	foreach($arr2 as $valor2) {
	// varre e compara valores de vetor 1 com vetor 2

		if ( $valor1 == $valor2 ) {
			// se valor de array 1 igual valor de array 2
			// valorIgual é verdadeiro
			$valorIgual = true;
			break;
		}
	}

	if (!$valorIgual){
		// se valorIgual é falso
		// adiciona valor de array 1 em novo array
		$arrFinal[] = $valor1;
	}
}

#-----------------------------
# COMPARA VETOR 2 COM VETOR 1
#-----------------------------

foreach($arr2 as $valor2) {
	$valorIgual = false;

	foreach($arr1 as $valor1) {
	// varre e compara valores de vetor 2 com vetor 1

		if ( $valor1 == $valor2 ) {
			// se valor de array 1 igual valor de array 2
			// valorIgual é verdadeiro
			$valorIgual = true;
			break;
		}
	}

	if (!$valorIgual){
		// se valorIgual é falso
		// adiciona valor de array 2 em novo array
		$arrFinal[] = $valor2;
	}
}

#------------------------
# IMPRESSÃO DE RESULTADOS
#------------------------

echo "<h1> Valores diferentes </h1>";

// IMPRIME ARRAY NOVO
for($val = 0; $val < count($arrFinal); $val++){

	echo ( $arrFinal[$val] );
	echo ', ';
}

?>