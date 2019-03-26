<?php

# EXERCICIO 02

# Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes.

$x = 3;

$a = $x % 2;
$b = $x % 5;
$c = $x % 10;

/*
if ( $a == 0 ) {
	echo "<br> $x é divisível por 2";
}

if ( $b == 0 ) {
	echo "<br> $x é divisível por 5";
}

if ( $c == 0 ) {
	echo "<br> $x é divisível por 10";
}
*/

switch ($x) {
	case $a == 0:
	echo "<br> $x é divisível por 2";
	case $b == 0:
	echo "<br> $x é divisível por 5";
	case $c == 0:
	echo "<br> $x é divisível por 10";
	case $a != 0 && $b != 0 && $c != 0:
	echo "<br> $x não é divisível";
}

?>