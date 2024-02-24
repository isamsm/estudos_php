<?php

    //Função que receba um número e o retorne ao quadrado

    function square($number) {
        return "O quadrado de $number é " . $number * $number . " <br />";
    }

    echo square(4);
    echo square(16);
    echo square(256);

?>