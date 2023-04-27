<?php

    //If aninhado - um if dentro de outro, podendo conter else em cada um deles também

    if(10 > 2) {
        echo '10 maior que 2, entrou no primeiro if <br>';

        if('teste' === 'teste') {
            echo 'teste é idêntico a teste, entra no segundo if';
        }
    }

    echo '<br> <br>';

    $out = 'sou um escopo fora';

    if(10 > 2) {
        echo '10 maior que 2, entrou no primeiro if <br>';

        $in = 'sou um escopo dentro';

        if('teste' === 'test') {
            echo 'teste é idêntico a test, entra no segundo if';
        } else {
            echo 'teste é diferente de test, entrou no segundo else';
            echo '<br> <br>' . $out . ' e eu ' . $in;
        }
    }

    echo '<br> <br>';

    if(12 < 2) {
        echo '12 é menor que 2, entrou no primeiro if';
        if('teste' === 'test') {
            echo 'teste é idêntico a test, entra no segundo if';
        } else {
            echo 'teste é diferente de test, entrou no segundo else <br>';
        }

        } else {
            echo '12 é maior que 2, entrou no primeiro else';
    } //Ignora todo o segundo bloco dentro do if, já que o primeiro else já deu falso

?>