<?php

    $nome = 'Isa';

    for($i = 1; $i < 10; $i++) {
        if($i === 2) {
            echo "Pulando número 2 <br />";
            continue;
        }

        if($i === 4) {
            echo "$nome <br />";
        }

        if($i === 8) {
            echo "Finalizando o loop";
            break;
        }

        echo "$i, menor que 10 <br />";
    }

?>