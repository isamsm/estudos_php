<?php

    function multipleValues($value = 1, $name = 'Isa', $color = 'Roxo') {
        return[$value, $name, $color];
    }

    $data = multipleValues();
    echo "Id: $data[0] <br /> Nome: $data[1] <br /> Cor: $data[2] <br />";

    //ou escolhendo os valores na chamda da função

    echo '<br />';

    function multipleValuesTwo($value, $name, $color) {
        return[$value, $name, $color];
    }

    $data = multipleValues(4, 'Isabelly', 'azul');
    echo "Id: $data[0] <br /> Nome: $data[1] <br /> Cor: $data[2] <br />";

