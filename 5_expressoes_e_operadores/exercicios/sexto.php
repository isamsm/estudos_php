<?php

    //Retorne falso com igualdade. Retorne verdadeiro com igualdade

    $n1 = 5;
    $n2 = 10;
    $n3 = 5;

    if ($n1 == $n3) {
        echo 'verdadeiro. 5 é igual a 5';
    }

    echo '<br>';

    if ($n1 == $n2) {
        echo 'verdadeiro. 5 é igual a 10';
    } else {
        echo 'falso. 5 é diferente de 10';
    }

?>