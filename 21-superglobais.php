<?php
// Superglobais - estão sempre acessíveis idependente do scopo
/*
$GLOBALS - um array que armazena todas as variáveis globais, possivel acessar de qualquer lugar
$_SERVER - um array com vários índices
$_POST - 
$_GET - 
$_FILES - 
$_ENV - 
$_REQUEST - 
$_COOKIE - 
$_SESSION - 
*/

$x = 10;
$y = 12;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}
//soma();

// Exemplos do uso da globa _SERVER - é possível consultar tudo na documentação do php
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";
echo "<hr>";

