<?php

    echo 'Igualdade: <br>';

    $n1 = 2;
    $n2 = '2';
    $n3 = 3;
    $nome = 'Isa';

    if ($n1 == $n2) {
        echo "2 e '2' são iguais";
    }

    if ($n1 == $n3) {
        echo '2 e 3 são iguais';
    }

    echo '<br>';

    if ($nome === 'Isa') {
        echo 'Acesso garantino. Bem vinda Isa!';
    }

    echo '<br> <br>';



    echo 'Idêntico: <br>';

    $n1 = 4;
    $n2 = '4';
    $n3 = 4;

    if ($n1 === $n2) {
        echo "4 e '4' são idênticos";
    }

    if ($n1 === $n3) {
        echo '4 e 4 são idênticos';
    }

    echo '<br> <br>';



    echo 'Diferente: <br>';

    $n1 = 4;
    $n2 = 3;
    $n3 = 4;

    if ($n1 != $n2) {
        echo "4 e 3 são diferentes";
    }

    if ($n1 != $n3) {
        echo '4 e 4 são diferentes';
    }

    echo '<br> <br>';



    echo 'Não idêntico: <br>';

    $n1 = 4;
    $n2 = '4';
    $n3 = 4;

    if ($n1 !== $n2) {
        echo "4 e '4' não são idênticos";
    }

    if ($n1 !== $n3) {
        echo '4 e 4 não são idênticos';
    }

    echo '<br> <br>';



    echo 'Maior: <br>';

    $n1 = 2;
    $n2 = 4;

    if ($n2 > $n1) {
        echo '4 é maior que 2';
    }

    if ($n1 > $n2) {
        echo '2 é maior que 4';
    }

    echo '<br> <br>';



    echo 'Maior ou igual: <br>';

    $n1 = 2;
    $n2 = 2;
    $n3 = 4;

    if ($n2 >= $n1) {
        echo '2 é maior ou igual a 2';
    }

    if ($n1 >= $n3) {
        echo '2 é maior ou igual a 4';
    }

    echo '<br> <br>';


    
    echo 'Menor: <br>';

    $n1 = 2;
    $n2 = 4;

    if ($n1 < $n2) {
        echo '2 é menor que 4';
    }

    if ($n2 < $n1) {
        echo '4 é menor que 2';
    }

    echo '<br> <br>';



    echo 'Menor ou igual: <br>';

    $n1 = 2;
    $n2 = 2;
    $n3 = 4;

    if ($n2 <= $n1) {
        echo '2 é menor ou igual a 2';
    }

    if ($n3 <= $n1) {
        echo '4 é menor ou igual a 2';
    }
?>