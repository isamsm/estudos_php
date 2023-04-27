<?php

    //array com caracteristicas de um carro. imprimir duas caracteristicas

    $car = ['color' => 'vermelho', 'size' => 'grande', 'doubleDoors' => false, 'wheels' => 4];

    $wheels = $car['wheels'];

    print_r($car);

    echo "<br>";

    echo "cor do carro: $car[color]";
    echo "<br>";
    echo "tamanho do carro: carro $car[size]";
    echo "<br>";
    echo "rodas: $wheels";

?>