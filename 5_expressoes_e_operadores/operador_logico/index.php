<?php

    $name = 'Isa';
    $first_num = 5;
    $second_name = 'Isa';
    $second_num = 5;

    echo 'Operador AND (&&): <br>';

    if ($first_num == $second_num && $name == $second_name) {
        echo '5 é igual a 5 E Isa é igual a Isa';
    }

    echo '<br> <br>';

    echo 'Operador OR (||): <br>';

    if ($first_num == $name || $first_num == $second_num) {
        echo '5 não é igual a Isa MAS 5 é igual a 5';
    }

    echo '<br> <br>';

    echo 'Operador NOT (!) INVERTE: <br>';

    $first_num = 5;
    $second_num = 7;

    if (!($first_num > $second_num)) { //false vira true
        echo '5 é maior do que 7';
    }

    if (!($first_num < $second_num)) { //true vira false
        echo '5 é menor do que 7';
    }

?>