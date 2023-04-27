<?php

    //Crie varíaveis com número e outra com string. Faça uma variável checando se é numero. Se sim, multiplique por 2 dentro de outra variável. Crie outro if para checar se esse resultado é maior que 100, se for, imprima mensagem.

    $a = 2;
    $b = 60;
    $string = 'string';

    if(is_int($a)) {
        $operacao_a = $a * 2;

        if ($operacao_a > 100) {
            echo $operacao_a . ' é maior do que 100';
        } else {
            echo $operacao_a . ' é menor do que 100';
        }
    } else {
        echo $a . ' não é um número';
    }

    echo '<br>';

    if(is_int($b)) {
        $operacao_b = $b * 2;

        if ($operacao_b > 100) {
            echo $operacao_b . ' é maior do que 100';
        } else {
            echo $operacao_b . ' é menor do que 100';
        }
    } else {
        echo $b . ' não é um número';
    }

    echo '<br>';

    if(is_int($string)) {
        $operacao_string = $string * 2;

        if ($operacao_string > 100) {
            echo $operacao_string . ' é maior do que 100';
        } else {
            echo $operacao_string . ' é menor do que 100';
        }
    } else {
        echo $string . ' não é um número';
    }
?>