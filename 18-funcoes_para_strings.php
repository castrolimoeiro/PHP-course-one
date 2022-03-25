<?php
// funçoes para strings

// strtoupper - converte em maiuscula
/* $nome = "david castro";
$novoNome = strtoupper($nome);
echo $novoNome; */

// strtolower - converte em minuscula
/* $nome = "DAVID CASTRO";
$novoNome = strtolower($nome);
echo $novoNome; */

// substr - retorna uma parte da string
// $msg = "Hello, world!";
// add a variavel e a posição de inicio e quantos caracteres quer que apareça após o inicio
// echo substr($msg, 6, 6); 

// str_pad - complementa uma string
/* $objeto = "teclado";
$novoObjeto = str_pad($objeto, 11, "*", STR_PAD_BOTH);
echo $novoObjeto; */

// str_repeat - para repetir uma string
// $string = str_repeat("carro ",5 );
// echo $string;

// strlen - retorna o comprimento de uma string
// $mensagem = "Hello, World!";
// echo strlen($mensagem);

// str_replace - serve para substituir uma palavra
/* $texto = "A seleção do Brasil ganhou a copa do mundo";
$novoTexto = str_replace("Brasil", "São Raimundo", $texto);
echo $novoTexto; */

// strpos - retorna a posição de uma palavra em um texto
$texto = "A seleção do Brasil ganhou a copa do mundo";
echo strpos($texto, "Brasil");