<?php

    //Vaiaveis 5 e 3. Igualdade, diferença, idêntico e não idêntico

    $n1 = 5;
    $n2 = 3;

    if ($n1 == $n2) {
        echo '5 é igual a 3';
    }
    
    if ($n1 === $n2) {
        echo '5 é idêntico a 3';
    }
    
    if ($n1 != $n2) {
        echo '5 é diferente de 3';
    }

    echo '<br>';
    
    if ($n1 !== $n2) {
        echo '5 é não idêntico a 3';
    }

?>