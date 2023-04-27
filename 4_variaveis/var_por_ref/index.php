<?php

    //variavel de referência valor Isa, variavel referenciada mesmo valor

    $n1 = 'Isa'; 
    $nome =& $n1; 

    echo $n1;
    echo '<br>';
    echo $nome;

    echo '<br>';

    //muda o valor da variável de referência e consequentemente o da referênciada

    $n1 = 'Lucia'; 
    echo $n1;
    echo '<br>';
    echo $nome;

    echo '<br>';

    //muda o valor da variável referênciada e consequentemente o da de referência

    $nome = 'Maria'; 
    echo $n1;
    echo '<br>';
    echo $nome;

?>