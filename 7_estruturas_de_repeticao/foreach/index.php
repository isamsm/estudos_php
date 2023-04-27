<?php

    //Utilizada para iteração entre itens arr

    $arr = [1, 2, 3, 4, 5];

    foreach($arr as $numeros) {
        echo "O indice atual do arr é: $numeros <br />";

        if($numeros === 2) {
            echo "Opa, chegamos ao número 2 <br />";
        }
    }

    //Imprime o item atual do arr

?>