<?php

# EXERCICIO 05

# Criar um algoritmos que imprima a tabuada de um número dado no início.


$tabuada = 5;


echo "FOR: <br>";
for ( $i = 0; $i < 11; $i++ ) {
	$resultado = $tabuada * $i;
	echo "$tabuada x $i = $resultado";
	echo "<br>";
}

echo "<br><br>";

echo "WHILE: <br>";
$x = 0;
while ( $x < 11 ) {
	$resultado = $tabuada * $x;
	echo "$tabuada x $x = $resultado";
	echo "<br>";
	$x++;
}


?>