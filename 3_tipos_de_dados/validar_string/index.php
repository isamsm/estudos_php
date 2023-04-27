<?php

    $string = "string";
    $nString = 12;

    if (is_string($string)) {
        echo "$string, é uma string";
    } else {
        echo "$string não é uma string";
    }

    echo "<br>";

    if (is_string($nString)) {
        echo "$nString é uma string";
    } else {
        echo "$nString não é uma string";
    }

?>