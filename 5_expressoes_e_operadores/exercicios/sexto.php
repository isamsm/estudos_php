<?php

    //Retorne falso com igualdade. Retorne verdadeiro com igualdade

    $first_num = 5;
    $second_num = 10;
    $third_num = 5;

    if ($first_num == $third_num) {
        echo 'verdadeiro. 5 é igual a 5';
    }

    echo '<br>';

    if ($first_num == $second_num) {
        echo 'verdadeiro. 5 é igual a 10';
    } else {
        echo 'falso. 5 é diferente de 10';
    }

?>