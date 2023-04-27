<?php

    $nome = 'Isa';
    $n1 = 5;
    $nome2 = 'Isa';
    $n2 = 5;

    echo 'Operador AND (&&): <br>';

    if ($n1 == $n2 && $nome == $nome2) {
        echo '5 é igual a 5 E Isa é igual a Isa';
    }

    echo '<br> <br>';

    echo 'Operador OR (||): <br>';

    if ($n1 == $nome || $n1 == $n2) {
        echo '5 não é igual a Isa MAS 5 é igual a 5';
    }

    echo '<br> <br>';

    echo 'Operador NOT (!) INVERTE: <br>';

    $n1 = 5;
    $n2 = 7;

    if (!($n1 > $n2)) { //false vira true
        echo '5 é maior do que 7';
    }

    if (!($n1 < $n2)) { //true vira false
        echo '5 é menor do que 7';
    }

?>