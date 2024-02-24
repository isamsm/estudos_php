<?php

    //Criação array e utilização da função implode do php neste, passando como primeiro argumento ','
    //e como segundo argumento o array. atribuir invocação da função a uma variável e exibir o resultado

    $arr = ['um', 2, true];

    $implode = implode(', ', $arr);

    echo $implode;

?>