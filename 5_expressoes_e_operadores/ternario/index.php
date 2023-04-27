<?php

    //if e else: ? !

    $nome = 'Isa';
    $n1 = 5;
    $n2 = 6;

    echo $nome === 'Isa' ? $nome : 'Nome inválido'; //true - if
    echo '<br>';
    echo $n1 > $n2 ? '5 é maior que 6' : '6 é maior que 5'; //false - else
    echo '<br>';
    echo $nome === 'Isa' || $n1 === $n2 ? 'Nome é igual a Isa OU 5 é igual a 6' : 'Uma comparação errada ou ambas'; //true - if

?>