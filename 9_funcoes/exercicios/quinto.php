<?php

    //Verificar se é impar ou par e imprimir texto de acordo com a resposta

    function evenOrOdd($number) {
        if($number % 2 == 0) {
            echo "$number é par <br />";
        } else {
            echo "$number é impar <br />";
        }
    }

    evenOrOdd(4);
    evenOrOdd(53);
    evenOrOdd(72);
    evenOrOdd(1094);

?>