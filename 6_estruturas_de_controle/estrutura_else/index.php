<?php

    //Else: se não. Executado se if der falso

    $name = 'Isa';

    if($name = 'Maria') {
        echo 'O nome é Maria';
    } else {
        echo 'O nome não é Maria';
    }

    echo '<br>';

    if(5 > 6) {
        echo '5 é maior do que 6';
    } else {
        echo '5 não é maior do que 6, é menor';
    }

    echo '<br>';

    if($name = 'Isa' && 5 > 7) {
        echo 'O nome é Isa e 5 é maior do que 7';
    } else {
        echo 'Uma ou mais verificações são falsas';
    }

?>