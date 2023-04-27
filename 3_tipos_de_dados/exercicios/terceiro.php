<?php

    //imprimir três floats e usar função is_float em um deles

    $n = 10.23;

    echo 9.1;
    echo "<br>";
    echo 7.55;
    echo "<br>";
    echo $n;

    echo "<br>";

    if (is_float($n)) {
        echo $n, " é float";
    } else {
        echo $n, " não é float";
    }

?>