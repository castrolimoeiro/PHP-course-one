<?php
/* Expressões regulares
Define um padrão a ser usado para procurar ou
substituir palavras ou grupos de palavras.
^ inicio da expressão
$ final da expressão
/i  - remover o case sensitive
[] conjunto de caracteres
{} ocorrências - ?{0,1} *{0,} + {1,}
/^[a-z0-9,\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
*/


// VALIDAÇÃO DE EMAIL
$string = "meuemail@email.com.br";
// $padrao = "/^[a-z0-9]+$/i";
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i";

if(preg_match($padrao, $string)):
    echo "Email Válido <hr>".$string;
else:
    echo "Inválido <hr>";
endif;
echo "<hr>";

// VALIDAÇÃO DE DATA
$data = "30/03/2022";
$padrao1 = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if(preg_match($padrao1, $data)):
    echo "Data Válida <hr>".$data;
else:
    echo "Inválido <hr>";
endif;