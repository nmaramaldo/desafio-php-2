<?php

$sala = [];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $sala[$i][$j] = rand(0, 1);
    }
}

function consultarAssento($linha, $coluna){
    global $sala;
    if ($linha < 0 || $linha >= 4 || $coluna < 0 || $coluna >= 4) {
        return "POSIÇÃO INVÁLIDA";
    }

    if ($sala[$linha][$coluna] === 0) {
        return "LIVRE";
    } else {
        return "OCUPADO";
    }
}

function exibirSituacao($linha, $coluna){
    $status = consultarAssento($linha, $coluna);
    if ($status === "POSIÇÃO INVÁLIDA") {
        echo "Assento [{$linha}][{$coluna}] é uma POSIÇÃO INVÁLIDA.\n";
    } else {
        echo "Assento [{$linha}][{$coluna}] está {$status}\n";
    }
}

//TESTES
//Assentos válidos
exibirSituacao(0, 1);
exibirSituacao(2, 3);

//Assentos inválidos
exibirSituacao(6, 8);
exibirSituacao(10, 7);

?>


