<?php

# EXERCICIO 01

# Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.

$x = 10;
$y = 5;

$soma = $x + $y;

if ($soma > 20) {

	$resultado = $soma + 8;
	echo "O resultado é $resultado !";

} else if ($soma <= 20) {

	$resultado = $soma - 5;
	echo "O resultado é $resultado !";

} else {
	echo 'Valor inválido!';
}

?>