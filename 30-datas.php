<?php
// datas

// dia numero
echo date('d')."<br>";
// dia 3 primeiras letras
echo date('D')."<br>";
// mês número
echo date('m')."<br>";
// mês 3 primeiras letras
echo date('M')."<br>";
// ano número
echo date('y')."<br>";
// ano completo
echo date('Y')."<br>";
// 01/01/2000
echo date('d/m/Y')."<br>";
// dia da semana por extenso
echo date('l')."<br>";
// ajuste de região
date_default_timezone_set('America/Fortaleza');
// hora formato am pm
echo date('h:i:s A')."<br>";
// hora formato 24h
echo date('H:i:s')."<br>";
echo "<hr>";

// para armazenar datas em banco de dados
// banco de dados normalmente trabalha com duas colunas date e datetime

//formato para coluna Date
$date = date('Y-m-d');
echo $date."<hr>";

// formato para coluna DateTime
$datetime = date('Y-m-d H:i:s');
echo $datetime."<hr>";

// Time
$time = time(); // retorna quantidade de segundos desde 1970 até agora
echo time()."<br>";
echo date('d/m/Y', $time)."<hr>";

// mktime
//                    hora, min, seg, mes, dia, ano  
$data_pagamento = mktime(14, 15, 45, 02, 16, 2035);
echo date('d/m/Y - h:i', $data_pagamento)."<hr>";

// str to time - convertendo string
// exemplo de um cadastro de produto com horario e data
$data = '2022-02-16 12:53:45';
$data = strtotime($data);

echo date('d/m/Y', $data);


