<?php

/* Condicionais
- if
- else
- elseif
*/

/*$numero = 15;

if ($numero == 10):
    echo "É igual a 10.";
elseif ($numero < 10):
    echo "É menor que 10";
else:
    echo "É maior que 10";
endif;
echo "<hr>";

// ? = if
//: = else
$media = 6.9;
echo ($media >= 7) ? "Aprovado" : "Reprovado";*/

/************** Condicionais *******************

- switch
- case
*/

$corPreferida = "preto";

switch ($corPreferida):
    case "vermelho":
        echo "Sua cor preferida é o vermelho.";
    break;
    case "verde":
        echo "Sua cor preferida é o verde.";
    break;
    case "azul";
        echo "Sua cor preferida é o azul.";
    default:
        echo "Não sei qual é a sua cor favorita.";
endswitch;