<?php

    //Variáveis recebendo idades. Verificar se idades são maiores ou iguais a 18. Mandar mensagem se a pessoa for maior de 18

    $first_person = 'Julia';
    $first_age = 15;
    $second_person = 'Larissa';
    $second_age = 18;
    $third_person = 'Pablo';
    $third_age = 39;

    $legal = 18;

    if($first_age >= $legal) {
        echo $first_person, ' é maior de idade';
    }

    if($second_age >= $legal) {
        echo $second_person, ' é maior de idade';
    }

    echo '<br>';

    if($third_age >= $legal) {
        echo $third_person, ' é maior de idade';
    }

?>