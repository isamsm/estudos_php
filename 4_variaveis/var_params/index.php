<?php

    function nameFunc($name) {
        echo "parâmetro nome: $name <br>";
    }

    nameFunc('Isa');
    nameFunc('Lisa');
    nameFunc('Ana');

    function addFunc($first_num, $second_num) {
        echo "parâmetro soma: $first_num + $second_num = ", $first_num + $second_num, '<br>';
    }

    addFunc(50, 20);
    addFunc(20, 30);
    addFunc(80, -20);

?>