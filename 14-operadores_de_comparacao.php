<?php

/* Operadores de comparação
== igualdade
!= não igual 
=== idêntico
!== não idêntico
<> diferente
< menor que
> maior que
<=  menor ou igual
>=  maior ou igual
<=> spaceship
*/

/*
if (10 == "10"):  // essa comparação retornará um valor positivo mesmo sendo nº e string
    echo "positive!";
else:
    echo "negative";
endif;
echo "<hr>";

if (10 === "10"):  // essa comparação retornará um valor negativo, numero é diferente de string aqui
    echo "positive!";
else:
    echo "negative";
endif;
echo "<hr>";
*/

var_dump(20 <=> 2); // lado esquerdo maior que o lado direito retorna 1
var_dump(20 <=> 20); // os dois lados iguais retorna 0
var_dump(20 <=> 30); // lado esquerdo menor que o lado direito retorna -1