<?php

    $name = 'Isa';

    echo "global1: $name <br>";

    if (10 > 5) {
        $name = 'Ana';
        echo "dentro de if: $name <br>";
    }

    $name = 'Maria';

    echo "global2: $name <br>";

    function nGlobal() {
        global $name;

        $name = 'Luiza';

        echo "função global: $name <br>";
    }

    nGlobal();

?>