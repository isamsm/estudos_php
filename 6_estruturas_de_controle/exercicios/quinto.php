<?php

    //Crie uma variável com a velocidade de um carro. If para verificar velocidade:
    //Velocidade menor que 40 - Imprima velocidade correta
    //Velocidade igual a 40 - Imprima para o motorista tomar cuidado
    //Velocidade maior que 40 - Mensagem de multa

    $velocidade_carro = 40;
    $velocidade_recomendada = 40;

    echo 'Carro 1: <br>';

    if($velocidade_carro < $velocidade_recomendada) {
        echo 'seu carro está na velocidade certa';
    } else if($velocidade_carro === $velocidade_recomendada) {
        echo 'tome cuidado, você está quase excedendo o limite!';
    } else {
        echo 'você foi multado, sua velocidade excedeu o limite!';
    }

    echo '<br> <br>';

    $velocidade_carro_dois = 87;

    echo 'Carro 2: <br>';

    if($velocidade_carro_dois < $velocidade_recomendada) {
        echo 'seu carro está na velocidade certa';
    } else if($velocidade_carro_dois === $velocidade_recomendada) {
        echo 'tome cuidadom, você está quase excedendo o limite!';
    } else {
        echo 'você foi multado, sua velocidade excedeu o limite!';
    }



?>