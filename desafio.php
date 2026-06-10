<?php

function consultarAssento($linha, $coluna){
    $sala = [
        [0, 1, 0, 0, 1],
        [1, 0, 1, 0, 1],
        [0, 0, 0, 1, 0],
        [1, 1, 0, 0, 1],
        [1, 0, 0, 0, 1]
    ];
    
    if ($linha < 0 || $linha > 4 || $coluna < 0 || $coluna > 4) {
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
exibirSituacao(2, 4);
exibirSituacao(3, 1);

//Assentos inválidos
exibirSituacao(6, 8);
exibirSituacao(10, -7);

?> 