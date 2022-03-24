<?php
//Arrays
//é possivel especificar  a posição dessa forma tbm
$carros = array("BMW", "Fiat", 6=>"Hilux");
//print_r($carros);
//echo $carros[1];

//para inserir um item novo no array
$carros[] = "Gol";
//especificando onde adicionar o novo item
$carros[10] = "Camaro";
print_r($carros);
echo "<br>$carros[10]";

//outra maneira de criar array
$clientes = ["david", "noah", "simone", "maria"];
echo "<br>";
print_r($clientes);
echo "<br> <hr>";

//count - mostra quantos elementos o array possui

//echo count($carros);
// outro exemplo
$totalCarros = count($carros);
echo $totalCarros;
echo "<hr>";

// Foreach - para cada
foreach($carros as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

// Arrays associativos (parece o dicionário python)

$pessoa = array("nome" => "David", "sobrenome"=> "Castro", "idade"=> 33, "altura"=> 1.80);
$pessoa["cidade"] = "Limoeiro";

//echo $pessoa["nome"];
//echo $pessoa["sobrenome"];

//print_r($pessoa);

foreach($pessoa as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";
// Arrays multidimensionais

$times = array(
"cariocas"=> array("vasco", "flamengo", "botafogo"),
"paulistas"=> array("santos", "são paulo", "Palmeiras"),
"cearense"=> array("Ceará", "Fortaleza", "Ferroviário")
);

 echo $times["cariocas"][2]."<br>";
 echo $times["cearense"][0]."<br>";
 echo $times["paulistas"][1]."<br>";

 echo "<hr>";

 $regioes = array(
     "norte"=> array("Amazonas", "Roraima", "Amapá", "Pará", "Acre", "Rondônia", "Tocatins"),
     "nordeste"=> array("Ceará", "Maranhão", "Piauí", "Rio Grande do Norte", "Paraíba", "Pernambuco", "Sergipe", "Alagoas", "Bahia"),
     "centro-oeste"=> array("Mato Grosso", "Distrito Federal", "Goias", "Mato Grosso do Sul"),
     "sudeste"=> array("São Paulo", "Rio de Janeiro", "Minas Gerais", "Espírito Santo"),
     "sul"=> array("Rio Grande do Sul", "Paraná", "Santa Catarina"));

 echo "Estados da região Norte: <br>";
 foreach($regioes["norte"] as $indice => $valor){
     $indice = $indice + 1;
     echo $indice.": ".$valor."<br>";
 };
echo "<br>";

 echo "Estados da região Nordeste: <br>";
foreach($regioes["nordeste"] as $indice => $valor){
    $indice += 1;
    echo $indice.": ".$valor."<br>";
};
echo "<br>";

echo "Estados da região Centro-Oeste: <br>";
foreach($regioes["centro-oeste"] as $indice => $valor){
    $indice +=1;
    echo $indice.": ".$valor."<br>";
};
echo "<br>";

echo "Estados da região Sudeste: <br>";
foreach($regioes["sudeste"] as $indice => $valor){
    $indice += 1;
    echo $indice.": ".$valor."<br>";
};
echo "<br>";

echo "Estados da região Sul: <br>";
foreach($regioes["sul"] as $indice => $valor){
    $indice += 1;
    echo $indice.": ".$valor."<br>";
};