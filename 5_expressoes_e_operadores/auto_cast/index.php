<?php

    echo '5 / 2 =', 5 / 2, '<br>'; //resulta em float

    if (is_float(5/2)) {
        echo 'o resultado de 5 / 2 é flutuante <br>';
    } 

    echo '5 . 5 = ', 5 . 5, '<br>'; //resulta em string

    if (is_string(5 . 5)) {
        echo 'o resultado de 5 . 5 é uma string <br>';
    }

    $nome = 'Isa';
    $sobrenome = 'Marques';
    $nomeCompleto = $nome . ' ' . $sobrenome;  //concatenar duas variáveis com um espaço entre elas

    echo $nomeCompleto
?>