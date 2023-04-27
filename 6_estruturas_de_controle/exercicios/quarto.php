<?php

    //Crie uma variável com a velocidade de um carro. If para verificar velocidade:
    //Velocidade menor que 40 - Imprima velocidade correta
    //Velocidade igual a 40 - Imprima para o motorista tomar cuidado
    //Velocidade maior que 40 - Mensagem de multa

    $car_speed = 40;
    $ideal_speed = 40;

    echo 'Carro 1: <br>';

    if($car_speed < $ideal_speed) {
        echo 'seu carro está na velocidade certa';
    } else if($car_speed === $ideal_speed) {
        echo 'tome cuidado, você está quase excedendo o limite!';
    } else {
        echo 'você foi multado, sua velocidade excedeu o limite!';
    }

    echo '<br> <br>';

    $second_car_speed = 87;

    echo 'Carro 2: <br>';

    if($second_car_speed < $ideal_speed) {
        echo 'seu carro está na velocidade certa';
    } else if($second_car_speed === $ideal_speed) {
        echo 'tome cuidadom, você está quase excedendo o limite!';
    } else {
        echo 'você foi multado, sua velocidade excedeu o limite!';
    }



?>