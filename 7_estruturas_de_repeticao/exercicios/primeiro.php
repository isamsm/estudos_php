<?php

    //Retorne itens do array que forem uma string

    $arr = ['ola', 1, true, 'teste'];
    $x = count($arr);
    $y = 0;

    while($y < $x) {
        if(is_string($arr[$y])) {
            echo $arr[$y] . '<br />';
        }

        $y++;
    }
?>