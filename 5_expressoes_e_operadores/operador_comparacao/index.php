<?php

    echo 'Igualdade: <br>';

    $first_num = 2;
    $second_num = '2';
    $third_num = 3;
    $name = 'Isa';

    if ($first_num == $second_num) {
        echo "2 e '2' são iguais";
    }

    if ($first_num == $third_num) {
        echo '2 e 3 são iguais';
    }

    echo '<br>';

    if ($name === 'Isa') {
        echo 'Acesso garantino. Bem vinda Isa!';
    }

    echo '<br> <br>';



    echo 'Idêntico: <br>';

    $first_num = 4;
    $second_num = '4';
    $third_num = 4;

    if ($first_num === $second_num) {
        echo "4 e '4' são idênticos";
    }

    if ($first_num === $third_num) {
        echo '4 e 4 são idênticos';
    }

    echo '<br> <br>';



    echo 'Diferente: <br>';

    $first_num = 4;
    $second_num = 3;
    $third_num = 4;

    if ($first_num != $second_num) {
        echo "4 e 3 são diferentes";
    }

    if ($first_num != $third_num) {
        echo '4 e 4 são diferentes';
    }

    echo '<br> <br>';



    echo 'Não idêntico: <br>';

    $first_num = 4;
    $second_num = '4';
    $third_num = 4;

    if ($first_num !== $second_num) {
        echo "4 e '4' não são idênticos";
    }

    if ($first_num !== $third_num) {
        echo '4 e 4 não são idênticos';
    }

    echo '<br> <br>';



    echo 'Maior: <br>';

    $first_num = 2;
    $second_num = 4;

    if ($second_num > $first_num) {
        echo '4 é maior que 2';
    }

    if ($first_num > $second_num) {
        echo '2 é maior que 4';
    }

    echo '<br> <br>';



    echo 'Maior ou igual: <br>';

    $first_num = 2;
    $second_num = 2;
    $third_num = 4;

    if ($second_num >= $first_num) {
        echo '2 é maior ou igual a 2';
    }

    if ($first_num >= $third_num) {
        echo '2 é maior ou igual a 4';
    }

    echo '<br> <br>';


    
    echo 'Menor: <br>';

    $first_num = 2;
    $second_num = 4;

    if ($first_num < $second_num) {
        echo '2 é menor que 4';
    }

    if ($second_num < $first_num) {
        echo '4 é menor que 2';
    }

    echo '<br> <br>';



    echo 'Menor ou igual: <br>';

    $first_num = 2;
    $second_num = 2;
    $third_num = 4;

    if ($second_num <= $first_num) {
        echo '2 é menor ou igual a 2';
    }

    if ($third_num <= $first_num) {
        echo '4 é menor ou igual a 2';
    }
?>