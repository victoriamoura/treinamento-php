<?php

# EXERCICIO 08 / AGARRAY NESSE KKKKKK

# Criar 2 vetores com 10 números inteiros cada. Gerar e imprimir um vetor dos números não comuns aos e vetores

$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = [2, 6, 9, 10, 13, 15, 23, 27, 29, 50];
$arrFinal = array();

/*
for ( $arr1 = 0; $arr1 < 10; $arr1++ ) {

	for ( $arr2 = 0; $arr2 < 10; $arr2++ ) {

		echo "$arr2 <br>" ;
	}
}
*/

foreach($arr1 as $valor1) {

	foreach($arr2 as $valor2) {

		if ( $valor2 != $valor1 ) {

			echo "$valor1 é diferente de $valor2 <br>";

			$arrFinal[] = $valor2;
			//array_push($arrFinal, $valor2);
		}
	}

	echo "<br>";
}

echo $arrFinal;

//var_dump($arrFinal);

?>