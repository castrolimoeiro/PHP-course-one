<?php

$nome = "David Castro";

function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

////////////////////////////

function exibeCidade() {
    global $cidade;
    $cidade = "Fortaleza";
    
}

 exibeCidade();
 echo $cidade;
 echo "<hr>";

 ////////////////////////////
$a = 1;
$b = 3;
$c = 12;

function soma() {
    //global $a, $b, $c, $soma;
    //$soma = $a + $b + $c;
    //echo $soma;

    echo $GLOBALS ['a'] + $GLOBALS ['b'] + $GLOBALS ['c'];
    
}

soma();
