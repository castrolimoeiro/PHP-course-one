<?php
// criando funções

function exibirNome($nome) {
    echo "Meu nome é $nome";
}

exibirNome("David Castro");
echo "<hr>";

function calcularMedia($nome, $n1, $n2) {
    $media = ($n1 + $n2) / 2;
    if ($media >= 7):
        echo "O aluno $nome foi aprovado com a nota final $media.";
    else:
        echo "O aluno $nome foi reprovado.";
    endif;
}

calcularMedia("David", 5, 10);