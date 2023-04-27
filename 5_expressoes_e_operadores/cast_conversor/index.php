<?php

    //Converter um tipo de uma variável para outro

    $a = (int) '12';

    echo $a;
    echo '<br>';
    echo $a + 10;
    echo '<br>';

    if ($a === 12) {
        echo 'A é idêntico a 12, então, foi convertido em número';
    }

    echo '<br>';

    $b = (float) '8.55';

    echo $b;

    echo '<br>';

    if ($b === 8.55) {
        echo 'B é idêntico a 8.55, então, foi convertido em float';
    }

    echo '<br>';

    $c = (string) 57;

    echo $c;

    echo '<br>';

    if ($c === '57') {
        echo "C é idêntico a '54', então, foi convertido em string";
    }
?>