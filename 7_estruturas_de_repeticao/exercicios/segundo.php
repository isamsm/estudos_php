<?php

    //Crie um loop até 30
    //O contador começa em 4
    //Incremento de 2 em 2
    //Break quando chegar a 24

    $n = 4;

    while($n <= 30) {
        echo $n . ', é menor do que que 30' . '<br />';

        if($n === 24) {
            echo 'Finalizando o loop <br />';
            break;
        }

        $n += 2;
    }

    echo 'Loop finalizado';


?>