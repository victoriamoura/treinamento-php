<?php

# EXERCICIO 07

# Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Construir um algoritmos que calcule e imprima quantos anos serão necessários para que Juca seja maior que chico

$chico = 1.50;
$juca = 1.10;

$anos = 0;

while ( $chico > $juca ) {

	$chico = $chico + 0.02;
	$juca = $juca + 0.03;
	$anos++;

	echo "Ano: $anos <br>";
	echo "Chico: $chico <br>";
	echo "Juca: $juca <br><br>";
}

echo "Em $anos Juca terá a mesma altura que chico!";

/*
for ( $anos = 0; $chico > $juca; $anos++ ) {

	$chico = $chico + 0.02;
	$juca = $juca + 0.03;
}

echo $anos;
*/

?>