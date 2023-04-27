<?php

    echo '3 + 2 * 5 = ', 3 + 2 * 5, '<br>'; //multiplicação antes
    echo '(3 + 2) * 5 = ', (3 + 2) * 5, '<br>'; //não seguir ordem de multi antes => ()
    echo '5 + 2 / 10 = ', 5 + 2 / 10, '<br>';
    echo '(5 + 2) / 10 = ', (5 + 2) / 10, '<br>';

    $n1 = 5;
    $n2 = 2;
    $n3 = 10;

    echo '5 + 2 / 10 = ', $n1 + $n2 / $n3, '<br>'; //dentro de vars
    echo '(5 + 2) / 10 = ', ($n1 + $n2) / $n3, '<br>'; 
    echo '2 + 10 / 5 = ', $n2 + $n3 / $n1, '<br>'; 

    $total = $n1 * $n2 * $n3; //var total

    echo '5 * 2 * 10 = ', $total;

?>