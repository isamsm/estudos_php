<?php

    //variavel de referência valor Isa, variavel referenciada mesmo valor

    $first_name = 'Isa'; 
    $name =& $first_name; 

    echo $first_name;
    echo '<br>';
    echo $name;

    echo '<br>';

    //muda o valor da variável de referência e consequentemente o da referênciada

    $first_name = 'Lucia'; 
    echo $first_name;
    echo '<br>';
    echo $name;

    echo '<br>';

    //muda o valor da variável referênciada e consequentemente o da de referência

    $name = 'Maria'; 
    echo $first_name;
    echo '<br>';
    echo $name;

?>