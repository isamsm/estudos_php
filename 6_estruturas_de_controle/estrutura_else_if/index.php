<?php

    //Else if - Se if for falso. Pode ter um else depois dele

    $name = 'Isa';

    if($name === 'Maria') {
        echo 'O nome é Maria';
    } else if ($name === 'Isa') {
        echo 'O nome é Isa'. ', entrou no else if';
    } else {
        echo 'O nome é desconhecido';
    }

    echo '<br>';

    $x = 4;
    $y = 2;

    //Else if dentro de else if

    if($x < $y) {
        echo $x . ' é menor do que ' . $y;
    } else if ($x === $y) {
        echo $x . ' é igual a ' . $y . ', entrou no primeiro else if';
    } else if ($x > $y) {
        echo $x . ' é maior que ' . $y . ', entrou no segundo else if';
    } else {
        echo 'Nenhuma das condições é verdadeira';
    }

?>