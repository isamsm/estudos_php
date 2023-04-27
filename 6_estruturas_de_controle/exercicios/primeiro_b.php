<?php

    //Complementação do exercicio 1, adicionar um else para pessoas menor de idade.

    $first_person = 'Julia';
    $first_age = 15;
    $second_person = 'Larissa';
    $second_age = 18;
    $third_person = 'Pablo';
    $third_age = 39;

    $legal = 18;

    if($first_age >= $legal) {
        echo $first_person, ' é maior de idade';
    } else {
        echo $first_person, ' é menor de idade';
    }

    echo '<br>';

    if($second_age >= $legal) {
        echo $second_person, ' é maior de idade';
    } else {
        echo $second_person, ' é menor de idade';
    }

    echo '<br>';

    if($third_age >= $legal) {
        echo $third_person, ' é maior de idade';
    } else {
        echo $third_person, ' é menor de idade';
    }

?>