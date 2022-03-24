<?php
// Constantes = um identificador para um valor único
// constantes são globais

//os identificadores das constantes são em letras maiusculas
define("NOME", "David Castro");
define("IDADE", 33);
define("ALTURA", 1.80);
define("CASADO", true);

//perceba que não precisou do "$" para imprimir
echo "Meu nome é ".NOME. ", minha idade é ".IDADE." anos e minha altura é ".ALTURA."m.";
echo "<hr>";

define("TIMES", ['Ceará', 'Fortaleza', 'Bahia', 'Sport']);
echo TIMES[0];
var_dump(TIMES);
echo "<hr>";

function exibeNome() {
    echo TIMES[2];
}

exibeNome();