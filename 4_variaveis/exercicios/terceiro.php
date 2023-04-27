<?php

    //crie variáveis com os valores. crie variáveis para cada operação. cada operação vai depender do resultado da anterior

    $first_num = 15;
    $second_num = 30;
    $third_num = 12;
    $fourth_num = 16;
    $fifth_num = 5;

    $add = $first_num + $second_num;
    echo '15 + 30 = ', $add, '<br>';
    $sub = $add - $third_num;
    echo '45 - 12 = ', $sub, '<br>';
    $multi = $sub * $fourth_num;
    echo '33 * 16 = ', $multi, '<br>';
    $div = $multi / $fifth_num;
    echo '528 - 5 = ', $div, '<br>';

?>