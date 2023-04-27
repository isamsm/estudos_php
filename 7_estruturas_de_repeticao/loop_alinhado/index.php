<?php

    $n = 1;

    while($n <= 10) {
        echo "LOOP EXTERNO: $n <br /> <br />";
        $i = 1;

        while ($i <= 5) {
            echo "Loop interno: $i <br /> <br />";
            $i++;
        }

        $n++;
    }

?>