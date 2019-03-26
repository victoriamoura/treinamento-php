<?php

# EXERCICIO 03

# Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.

$nome = "fulanx";
$sexo = "feminino";
$idade = 24;


if ( $sexo == "feminino" && $idade < 25 ) {

	echo "$nome: aceita!";

} else {

	echo "$nome: não aceita!";
}


?>