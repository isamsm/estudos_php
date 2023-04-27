<?php

    //operações aritimeticas. faça uma subtração, uma divisão e uma multiplicação na mesma operação

    $first_num = 5;
    $second_num = 20;
    $third_num = -30;
    $total = $third_num - $first_num * $second_num / $first_num;
    $second_total = ($third_num - $first_num) * $second_num / $first_num;

    echo '-30 -5 * 20 / 5 = ', $total, '<br>';
    echo '(-30 -5) * 20 / 5= ', $second_total, '<br>';

?>