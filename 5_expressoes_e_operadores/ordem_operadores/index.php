<?php

    echo '3 + 2 * 5 = ', 3 + 2 * 5, '<br>'; //multiplicação antes
    echo '(3 + 2) * 5 = ', (3 + 2) * 5, '<br>'; //não seguir ordem de multi antes => ()
    echo '5 + 2 / 10 = ', 5 + 2 / 10, '<br>';
    echo '(5 + 2) / 10 = ', (5 + 2) / 10, '<br>';

    $first_num = 5;
    $second_num = 2;
    $third_num = 10;

    echo '5 + 2 / 10 = ', $first_num + $second_num / $third_num, '<br>'; //dentro de vars
    echo '(5 + 2) / 10 = ', ($first_num + $second_num) / $third_num, '<br>'; 
    echo '2 + 10 / 5 = ', $second_num + $third_num / $first_num, '<br>'; 

    $total = $first_num * $second_num * $third_num; //var total

    echo '5 * 2 * 10 = ', $total;

?>