<?php

    //Um parâmetro

    function maxSpeed($speed) {
        echo "A velocidade máxima do carro é de $speed km por hora <br />";
    }

    maxSpeed(300);
    maxSpeed(200);
    maxSpeed(100);

    //Dois parâmetro

    function percentage($firstPercentage, $secondPercentage) {
        echo "A bateria do primeiro celular está em $firstPercentage% e a do segundo em $secondPercentage% <br />";
    }

    percentage(10, 89);
    percentage(5, 80);

?>