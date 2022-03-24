<?php

/*********************ESCALARES************************/

// string
$nome = "David Castro";
// var_dump - mostra informações sobre a variável
var_dump($nome);

if(is_string($nome)):
    echo "'$nome' é uma string";
else:
    echo "'$nome' não é uma string";
endif;
echo "<hr>";

// int - números inteiros

$idade = 33;
var_dump($idade);
if(is_int($idade)):
    echo "$idade é um número inteiro";
else:
    echo "$idade não é um número inteiro";
endif;
echo "<hr>";

// float = números reais

$altura = 1.80;
var_dump($altura);
if(is_float($altura)):
    echo "$altura é um número real";
else:
    echo "$altura não é um número real";
endif;
echo "<hr>";


// boolean = verdadeiro ou falso

$admin = true;
var_dump($admin);
if(is_bool($admin)):
    echo "admin contém um valor boleano";
else:
    echo "admin não contém um valor boleano";
endif;
echo "<hr>";

/*********************COMPOSTOS************************/

// array
$carros = array("gol", "uno", "mustang", 123, 50.1, true);
var_dump($carros);
if(is_array($carros)):
    echo "é um array";
else:
    echo "não é um array";
endif;
echo "<hr>";


// object
class Cliente {
    public $nome;
    public function atribuirNome($nome) {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("David");
var_dump($cliente);
if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";

/*********************ESPECIAIS************************/

// null
$cidade = NULL;
var_dump($cidade);

// resource
