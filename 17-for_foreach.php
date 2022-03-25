<?php

// for - quando se sabe o número de repetições necessárias

$contador = 0;
$fator = 8;
$result = 0;
for ($contador; $contador<10; $contador++):
    $result = $fator * $contador;
    echo "Tabuada de $fator: ".$fator." x ".$contador." = ".$result."<br>";
endfor;
echo "<hr>";

$cores = array("Verde", "Amarelo", "Azul", "Branco", "Preto");
foreach($cores as $indice => $valor):
    echo $indice."-".$valor."<br>";
endforeach;