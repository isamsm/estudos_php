<?php

    //If - Se. Checa se expressão é verdadeira

    $nome = 'Isa';

    //Expressões verdadeiras. Entram no if

    if(5 > 2) {
        echo '5 é maior do que 2';
    }

    echo '<br>';

    if($nome === 'Isa') {
        echo 'Meu nome é Isa';
    }

    echo '<br>';

    if(5 < 7 && 8 > 5) {
        echo '5 é menor do que 7 e o 8 é maior do que 5';
    }

    //Expressão falsa, não entra no if

    if(8 > 10) {
        echo '8 é maior do que 10';
    }

?>