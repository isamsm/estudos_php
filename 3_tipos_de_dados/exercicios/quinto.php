<?php

    //array com caracteristicas de um carro. imprimir duas caracteristicas

    $carro = ['cor' => 'vermelho', 'tamanho' => 'grande', 'duasPortas' => false, 'rodas' => 4];

    $rodas = $carro['rodas'];

    print_r($carro);

    echo "<br>";

    echo "cor do carro: $carro[cor]";
    echo "<br>";
    echo "tamanho do carro: carro $carro[tamanho]";
    echo "<br>";
    echo "rodas: $rodas";

?>