<?php

    //demonstrando o erro de loop infinito. causado por estar usando decremento ao inves do incremento

    for($i = 0; $i < 10; $i--) {
        echo "$i <br />";
    }

?>