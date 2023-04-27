<?php

    //Variável que recebe peso. Se peso maior que 80, imprimir que está pesado demais. Se não, imprimir que peso está dentro do limite.

    $primeiro_peso = 50.67;
    $segundo_peso = 120;
    $peso_limite = 80;

    if($primeiro_peso > $peso_limite) {
        echo 'Peso 50.67 - Está pesado demais, o limite é 80';
    } else {
        echo 'Peso 50.67 - Peso dentro do limite';
    }

    echo '<br>';

    if($segundo_peso > $peso_limite) {
        echo 'Peso 120 - Está pesado demais, o limite é 80';
    } else {
        echo 'Peso 120 - Peso dentro do limite';
    }

?>