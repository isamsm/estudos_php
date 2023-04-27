<?php

    $num = 12;
    $string = "ola";

    if (is_int($num)) {
        echo "$num é inteiro";
    } else {
        echo "$num não é inteiro";
    }

    echo "<br>";

    if (is_int($string)) {
        echo "$string é inteiro";
    } else {
        echo "$string não é inteiro";
    }

?>