<?php

    //Crie variáveis com tipos de dado diferentes. Cheque se variável é inteiro. Se for, mensagem confirmando tipo de dado. Se não for, outra mensagem. 

    $string = 'É uma string';
    $n = 2;
    $float = 2.55;
    $bool = true;

    if(is_int($string)) {
        echo $string, ' é um inteiro';
    } else {
        echo $string, ' não é um inteiro';
    }

    echo '<br>';

    if(is_int($n)) {
        echo $n, ' é um inteiro';
    } else {
        echo $n, ' não é um inteiro';
    }

    echo '<br>';

    if(is_int($float)) {
        echo $float, ' é um inteiro';
    } else {
        echo $float, ' não é um inteiro';
    }

    echo '<br>';

    if(is_int($bool)) {
        echo $bool, ' é um inteiro';
    } else {
        echo $bool, ' não é um inteiro';
    }

?>