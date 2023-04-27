<?php

    function nomeFunction($nome) {
        echo "parâmetro nome: $nome <br>";
    }

    nomeFunction('Isa');
    nomeFunction('Lisa');
    nomeFunction('Ana');

    function somaFunction($n1, $n2) {
        echo "parâmetro soma: $n1 + $n2 = ", $n1 + $n2, '<br>';
    }

    somaFunction(50, 20);
    somaFunction(20, 30);
    somaFunction(80, -20);

?>