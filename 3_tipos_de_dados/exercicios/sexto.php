<?php

    //array associativo com caracteristicas de pessoas. if para verificar se é maior de idade e imprimir uma mensagem caso seja

    $first_person = ['name' => "Lisa", 'age' => 15];
    $second_person = ['name' => 'Luan', 'age' => 27];

    $first_age = $first_person['age'];
    $second_age = $second_person['age'];

    print_r($first_person);
    echo "<br>";
    print_r($second_person);
    echo "<br>";

    if ($first_age > 18) {
        echo "a primeira pessoa se chama $first_person[name] e tem $first_age anos, portanto, pode dirigir";
    } else {
        echo "a primeira pessoa se chama $first_person[name] e tem $first_age anos, portanto, não pode dirigir";
    }

    echo "<br>";

    if ($second_age > 18) {
        echo "a segunda pessoa se chama $second_person[name] e tem $second_age anos, portanto, pode dirigir";
    } else {
        echo "a segunda pessoa se chama $second_person[name] e tem $second_age anos, portanto, não pode dirigir";
    }

?>