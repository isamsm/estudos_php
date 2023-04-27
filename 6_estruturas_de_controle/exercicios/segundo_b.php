<?php

    //Variável que recebe peso. Se peso maior que 80, imprimir que está pesado demais. Se não, imprimir que peso está dentro do limite.

    $first_weight = 50.67;
    $second_weight = 120;
    $ideal_weight = 80;

    if($first_weight > $ideal_weight) {
        echo 'Peso 50.67 - Está pesado demais, o limite é 80';
    } else {
        echo 'Peso 50.67 - Peso dentro do limite';
    }

    echo '<br>';

    if($second_weight > $ideal_weight) {
        echo 'Peso 120 - Está pesado demais, o limite é 80';
    } else {
        echo 'Peso 120 - Peso dentro do limite';
    }

?>