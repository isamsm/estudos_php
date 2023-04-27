<?php

    //arr com valores inteiros de 10 até 100, incremento em 10
    //loop no array
    //valor 30 ou 40, próxima instrução

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $i = 0;

    while($i < count($arr)) {
        $n = $arr[$i];

        if($n === 30 || $n === 40) {
            echo "Pulando loop em $n <br />";
            $i++;
            continue;
        }

        echo "arr: $n <br />";
        $i++;
    }

?>