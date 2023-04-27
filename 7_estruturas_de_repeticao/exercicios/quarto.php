<?php

    //arr de 1 a 20. usar o for para imprimir apenas os números pares

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

    for($i = 0; $i < count($arr); $i++) {
        $n = $arr[$i];

        if($n % 2 === 0) {
            echo "$n <br />";
        }
    }

?>