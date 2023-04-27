<?php

    //crie um arr de 10 a 20 com for;
    //imprimir apenas números impares

    $arr = [];

    for($i = 10; $i <= 20; $i++) {
        array_push($arr, $i);
    }

    print_r($arr);
    echo "<br /> Impares do arr: <br />";

    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] % 2 != 0) {
            echo "$arr[$i] <br />";
        }
    }

?>