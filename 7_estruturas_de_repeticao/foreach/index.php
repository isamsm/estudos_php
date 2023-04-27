<?php

    //Utilizada para iteração entre itens arr

    $arr = [1, 2, 3, 4, 5];

    foreach($arr as $numbers) {
        echo "O indice atual do arr é: $numbers <br />";

        if($numbers === 2) {
            echo "Opa, chegamos ao número 2 <br />";
        }
    }

    //Imprime o item atual do arr

?>