<?php
// Manipulação de arquivos
 
 $arquivo = 'arquivo.txt';
 $conteudo = "Conteudo de teste\r\n";
$tamanhoArquivo = filesize($arquivo);

 //$arquivoAberto = fopen($arquivo, 'a'); // funcao libera apenas para escrever
 // fwrite($arquivoAberto, $conteudo); // funcao que escreve

 $arquivoAberto = fopen($arquivo, 'r'); // funcao libera apenas para leitura
 while(!feof($arquivoAberto)): // enquanto não for o final do arquivo
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha."<br>";
 endwhile;
 
 
 
 fclose($arquivoAberto);