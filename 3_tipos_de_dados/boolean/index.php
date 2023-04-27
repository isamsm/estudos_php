<?php

    echo true;
    echo "<br>";
    echo false; //vazio

    echo "<br>";

    if (true) { //true
        echo "é verdadeiro";
    } else {
        echo "é falso";
    }

    echo "<br>";

    if (6 < 7) { //true
        echo "é verdadeiro";
    } else {
        echo "é falso";
    }

    echo "<br>";

    if (7 < 5) { //false
        echo "é verdadeiro";
    } else {
        echo "é falso";
    }

    echo "<br>";

    $podePassar = false;

    if ($podePassar === true) {
        echo "pode passar";
    } else {
        echo "não passa";
    }

?>