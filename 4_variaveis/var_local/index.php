<?php

    $name = 'Isa';

    function teste() {
        $name = 'Maria';

        echo "Varíavel nome local: $name <br>";
    }

    teste();

    function teste2() {
        $name = 'Ana';

        echo "Varíavel nome local2: $name <br>";
    }

    teste2();

    echo "Varíavel nome global: $name <br>";

?>