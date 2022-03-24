<?php
// while & do while
// Enquanto a condição for verdadeira o código será execultado

$contador = 1;
while($contador <= 10):
    echo "Contador: $contador<br>";
    $contador ++;

endwhile;
echo "<hr>";

// do while
do {
    echo "Contador é $contador <br>";
    $contador++;
} while ($contador <= 20);