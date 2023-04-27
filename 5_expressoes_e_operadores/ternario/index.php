<?php

    //if e else: ? !

    $name = 'Isa';
    $first_num = 5;
    $second_num = 6;

    echo $name === 'Isa' ? $name : 'Nome inválido'; //true - if
    echo '<br>';
    echo $first_num > $second_num ? '5 é maior que 6' : '6 é maior que 5'; //false - else
    echo '<br>';
    echo $name === 'Isa' || $first_num === $second_num ? 'Nome é igual a Isa OU 5 é igual a 6' : 'Uma comparação errada ou ambas'; //true - if

?>