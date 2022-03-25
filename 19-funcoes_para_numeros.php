<?php
/* Funções para números
-number_format
-round
-ceil
-floor
-rand
*/

$db = 1234.5632;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco <hr>";

// round - arredondamento
echo round(3.6);
echo "<hr>";

// ceil - arredondamento sempre para cima
echo ceil(9.1);
echo "<hr>";

// floor - arredondamento sempre para baixo
echo floor(8.9);
echo "<hr>";

// rand - geera números aleatórios no intervalo especificado
echo rand(1, 90);
