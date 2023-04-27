<?php

    //array associativo com caracteristicas de pessoas. if para verificar se é maior de idade e imprimir uma mensagem caso seja

    $pessoa1 = ['nome' => "Lisa", 'idade' => 15];
    $pessoa2 = ['nome' => 'Luan', 'idade' => 27];

    $idade1 = $pessoa1['idade'];
    $idade2 = $pessoa2['idade'];

    print_r($pessoa1);
    echo "<br>";
    print_r($pessoa2);
    echo "<br>";

    if ($idade1 > 18) {
        echo "a primeira pessoa se chama $pessoa1[nome] e tem $idade1 anos, portanto, pode dirigir";
    } else {
        echo "a primeira pessoa se chama $pessoa1[nome] e tem $idade1 anos, portanto, não pode dirigir";
    }

    echo "<br>";

    if ($idade2 > 18) {
        echo "a segunda pessoa se chama $pessoa2[nome] e tem $idade2 anos, portanto, pode dirigir";
    } else {
        echo "a segunda pessoa se chama $pessoa2[nome] e tem $idade2 anos, portanto, não pode dirigir";
    }

?>