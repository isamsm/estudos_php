<?php

    $string = "string";
    $num = 12;

    if (is_string($string)) {
        echo "$string, é uma string";
    } else {
        echo "$string não é uma string";
    }

    echo "<br>";

    if (is_string($num)) {
        echo "$num é uma string";
    } else {
        echo "$num não é uma string";
    }

?>