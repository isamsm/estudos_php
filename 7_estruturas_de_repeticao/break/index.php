<?php

    //break => finaliza o loop

    $x = 0;

    while($x < 20) {
        echo $x . ', é menor do que 20' . '<br />';

        $x++;

        if($x > 10) {
            echo "Finaliza o loop <br />";
            break;
        }
    }

    echo "Sair do loop";

?>
