<?php
/*
****** OPERADORES ARITMETICOS ********
-> adição + 
-> subtração -
-> multiplicação *
-> divisão /
-> Módulo %
-> Exponenciação **
*/

/*
echo 10 + 10;
echo 15 - 5;
echo 3 * 5;
echo 15 / 5;
echo 15 % 4;
echo 3 ** 5;
*/

$a = 10;
$b = 20;
$c = 30;
$d = 5;
$e = 16;

$adicao = $a + $b;
echo $adicao;
echo "<hr>";

$subtracao = $c - $a;
echo $subtracao;
echo "<hr>";

$multiplicacao = $d * $a;
echo $multiplicacao;
echo "<hr>";

$divisao = $c / $a;
echo $divisao;
echo "<hr>";

$modulo = $e % $d;
echo $modulo;
echo "<hr>";

$expo = $a ** $d;
echo $expo;
echo "<hr>";

echo "(5 + 7 + 9 + 8) / 4 = ".(5 + 7 + 9 + 8) / 4;
