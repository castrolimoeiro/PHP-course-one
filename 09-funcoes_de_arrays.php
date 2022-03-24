<?php
/* 
 * is_array($array) = verifica se uma determinada variável é um array.
 * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array.
 * array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays.
 * array_pop($array) = exlui a ultima posição do array.
 * array_shift($array) = exclui a primeira posição do array.
 * array_unshift($array, "valor") = adiciona um ou mais elementos no início do array.
 * array_push($array, "valor1", "valor2") = adiciona um ou mais elementos no final do array.
 * array_combine($keys, $values) = mescla os dois arrays passados.
 * array_sum() = calcula a soma dos elementos de array.
 * explode("/", "20/01/2001") = transforma strings em array.
 * implode("-", $array) = transforma array em string.
 */

 $nomes = array("nome"=>"David","filho"=>"Noah","esposa"=>"Simone","sobrenome"=>"Castro");

// is_array($array) = verifica se uma determinada variável é um array.
// echo is_array($nomes);

// in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array.
// echo in_array("David", $nomes);

// array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
// $keys = array_keys($nomes);
// print_r($keys);

// array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
// $values = array_values($nomes);
// print_r($values);

// array_merge($array1, $array2) = agrega o conteúdo dos dois arrays.
/*$carros = array("Gol", "Palio", "Fusca", "Uno");
$motos = array("Titan", "Biz", "YBR", "CB1000");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);*/

// array_pop($array) = exlui a ultima posição do array.
/*$carros = array("Gol", "Palio", "Fusca", "Uno");
print_r($carros);
echo "<br>";
echo array_pop($carros)."<-Elemento que está sendo excluído";
echo "<br>";
array_pop($carros);
print_r($carros);*/


// array_shift($array) = exclui a primeira posição do array.
/*$carros = array("Gol", "Palio", "Fusca", "Uno");
print_r($carros);
echo "<br>";
echo array_shift($carros)."<- Elemento excluído";
echo "<br>";
print_r($carros);*/

// array_unshift($array, "valor") = adiciona um ou mais elementos no início do array.
/*$carros = array("Gol", "Palio", "Fusca", "Uno");
array_unshift($carros, "tangerina", "YBR", "maçã");
print_r($carros);*/

// array_push($array, "valor1", "valor2") = adiciona um ou mais elementos no final do array.
/*$carros = array("Gol", "Palio", "Fusca", "Uno");
array_push($carros, "tangerina", "maçã", "verde");
print_r($carros);*/

// array_combine($keys, $values) = mescla os dois arrays passados.
/*$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Ceará", "Ferroviário", "Fortaleza");
$results = array_combine($keys, $values);
print_r($results);*/

// array_sum() = calcula a soma dos elementos de array.
// $soma = array(5,6,7,10, 5.5);
// echo array_sum($soma);

// explode("/", "20/01/2001") = transforma strings em array.
/*$data = "23/03/2022";
$novaData = explode("/", $data);
print_r($novaData);
echo "<br>";
$frase = "O Senhor é meu Pastor e de nada terei falta...";
$teste = explode(" ", $frase);
print_r($teste);*/

// implode("-", $array) = transforma array em string.
/*$carros = array("Gol", "Palio", "Fusca", "Uno");
$teste = implode(", ", $carros);
echo $teste."<br>".var_dump($teste);*/

