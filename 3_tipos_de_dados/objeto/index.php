<?php

    class Pessoa {

        function falar() {
            echo "Olá!";
        }

    }

    $isa = new Pessoa();

    echo "<br>";

    $isa->idade = 20;

    echo "<br>";

    echo $isa->idade;

    echo "<br>";

    $isa->falar();

?>