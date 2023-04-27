<?php

    //operações aritimeticas. faça uma subtração, uma divisão e uma multiplicação na mesma operação

    $n1 = 5;
    $n2 = 20;
    $n3 = -30;
    $total = $n3 - $n1 * $n2 / $n1;
    $total2 = ($n3 - $n1) * $n2 / $n1;

    echo '-30 -5 * 20 / 5 = ', $total, '<br>';
    echo '(-30 -5) * 20 / 5= ', $total2, '<br>';

?>