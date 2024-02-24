<?php

    //Escopo global
    $a = 10;

    //Escopo local
    function testScope($a) {
        echo "Escopo local de A: $a <br />";
    }

    testScope(15);

    echo "Escopo global de A: $a <br />";
?>