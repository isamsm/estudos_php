<?php

    $a = true;

    if (is_bool($a)) {
        echo "$a é booleano";
    } else {
        echo "$a não é booleano";
    }

    echo "<br>";

    if (is_bool(0)) {
        echo "0 é booleano";
    } else {
        echo "0 não é booleano";
    }

    echo "<br>";

    if (is_bool("ola")) {
        echo "'ola' é booleano";
    } else {
        echo "'ola' não é booleano";
    }

    echo "<br>";

    if (0 == false) { //na comparação, 0 é false, na função, é passado como inteiro
        echo "0 é considerado é falso";
    }

?>