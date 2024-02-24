<?php

    //Crie uma função com três váriaveis númericas nela e realize sua multiplicação em um echo

    function multiplication() {
        $a = readline('Escolha um primeiro número: ');
        $b = readline('Escolha um segundo número: ');
        $c = readline('Escolha um terceiro número: ');

        $result = $a * $b * $c;

        echo "A multiplicação de $a, $b e $c é igual a $result";
    }

    multiplication()

?>