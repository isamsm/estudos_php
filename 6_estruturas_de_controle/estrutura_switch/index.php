<?php

    //Switch pode substituir o if em alguns casos. Break para não ser executado. Default, caso nenhuma condição for satisfeita

    $n = 2;

    switch($n) {
        case 0: 
            echo 'n é igual a 0 <br>';
            break;
        case 1:
            echo 'é igual a 1 <br>';
            break;
        default: 
            echo 'n não é igual a nenhum dos acima';
    }

?>