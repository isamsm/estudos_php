<?php

    echo NULL;

    echo "<br>";

    $nome = NULL;

    echo "<br>";

    if (is_null($nome)) {
        echo "o valor '$nome' é nulo";
    } else {
        echo "o valor '$nome' não é nulo";
    }

    $nome = "Isa";

    echo "<br>";

    if (is_null($nome)) {
        echo "o valor '$nome' é nulo";
    } else {
        echo "o valor '$nome' não é nulo";
    }
?>