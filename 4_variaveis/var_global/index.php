<?php

    $n = 'Isa';

    echo "global1: $n <br>";

    if (10 > 5) {
        $n = 'Ana';
        echo "dentro de if: $n <br>";
    }

    $n = 'Maria';

    echo "global2: $n <br>";

    function nGlobal() {
        global $n;

        $n = 'Luiza';

        echo "função global: $n <br>";
    }

    nGlobal();

?>