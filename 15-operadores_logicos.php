<?php

/* Operadores lógicos

e (&& - and)
ou (|| - or)
ou exclusivo (xor)
negação (!)*/

$idade = 33;
$nome = "David";

// As duas condições têm que ser verdadeiras.(&&)
/*if (($nome == "David") and ($idade == 33)):
    echo "David tem 33 anos a afirmação é verdadeira.";
else:
    echo "A afirmação é falsa.";
endif;*/


// retorna verdadeiro quando pelo menos uma condição é verdadeira(||)
// para retornar falso as duas afirmações têm que ser falsas
/*if (($nome == "David") or ($idade == 38)):
    echo "A afirmação é verdadeira.";
else:
    echo "A afirmação é falsa.";
endif;*/


// Só retornará verdadeiro se apenas 1 das afirmações for verdadeira
// se as duas forem verdadeiras retornará falso
/*if (($nome == "David") xor ($idade == 33)):
    echo "A afirmação é verdadeira.";
else:
    echo "A afirmação é falsa.";
endif;*/


// adicionando a ! dizemos que o nome não é "David" e para retornar verdadeiro as duas afirmações 
// têm que ser verdadeiras.
if (($nome == "David") and ($idade == 33)): // retornará verdadeiro pq o nome está diferente
    echo "A afirmação é verdadeira.";
else:
    echo "A afirmação é falsa.";
endif;

