<?php

    //continue => pula instrução

    $n = 10;

    while($n > 0) {
        if($n === 5 || $n === 7) {
            echo "Pulando instrução $n <br />";
            $n--;
            continue;
        }

        if($n === 2) {
            echo "Finalizando loop em $n <br />";
            break;
        }

        echo "$n, é maior do que 0 <br />";

        $n--;
    }

?>