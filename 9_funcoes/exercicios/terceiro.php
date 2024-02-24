<?php

    //Crie uma função com váriaveis de nome e sobrenome e imprima elas concatenadas

    function fullName() {
        $name = readline('Qual o seu primeiro nome? ');
        $surname = readline('Qual o seu segundo nome? ');

        $fullName = $name . ' ' . $surname;

        echo "Seu nome completo é $fullName";
    }

    fullName()

?>