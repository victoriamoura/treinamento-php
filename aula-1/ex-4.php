<?php

# EXERCICIO 04

# Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados.


$x = 1;
$y = 2;
$z = 3;

if ( $x == $y && $x == $z ) {

	echo "Três lados iguais!";

} elseif ( $x != $y && $x != $z ) {

	echo "Três lados diferentes!";

} else {

	echo "Dois lados iguais!";

}


?>