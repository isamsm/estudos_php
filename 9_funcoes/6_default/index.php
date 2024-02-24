<?php

    //função já tem valor default quando chmada e por isso não resulta em erro 

    function defaultValue($a = 1) {
        echo "O valor é $a <br />";
    }

    defaultValue();

    //mas se eu informar um valor para o parametro, este valor irá substituir o do default

    defaultValue(2);

    //no caso de dois parametros, um default e um normal

    function twoValues($a, $b = 5) {
        echo "O valores são $a e $b <br />";
    }

    twoValues(4);
    twoValues(4, 6);

?>