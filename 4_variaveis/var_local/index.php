<?php

    $n = 'Isa';

    function teste() {
        $n = 'Maria';

        echo "Varíavel nome local: $n <br>";
    }

    teste();

    function teste2() {
        $n = 'Ana';

        echo "Varíavel nome local2: $n <br>";
    }

    teste2();

    echo "Varíavel nome global: $n <br>";

?>