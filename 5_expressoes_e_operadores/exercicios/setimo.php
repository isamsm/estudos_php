<?php

    //Vaiaveis 5 e 3. Igualdade, diferença, idêntico e não idêntico

    $first_num = 5;
    $second_num = 3;

    if ($first_num == $second_num) {
        echo '5 é igual a 3';
    }
    
    if ($first_num === $second_num) {
        echo '5 é idêntico a 3';
    }
    
    if ($first_num != $second_num) {
        echo '5 é diferente de 3';
    }

    echo '<br>';
    
    if ($first_num !== $second_num) {
        echo '5 é não idêntico a 3';
    }

?>