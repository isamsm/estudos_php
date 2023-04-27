<?php

    //teste a operação '5' * 12 utilizando a função gettytype() para descobrir o tipo de dado dela

    $string = '5';
    $n = 12;
    $resultado = $string * $n;

    echo "'5' * 12 = ", $resultado, "<br>";

    echo gettype($resultado); //tipo de dado

?>