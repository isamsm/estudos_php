<?php

    //criar função chooseCarColor() com parametro cor e valor default de vermelha, retornar cor do carro também com default quanto com cor nova definida

    function chooseCarColor($carColor = 'vermelho') {
        echo "A cor do carro é $carColor <br />";
    }

    chooseCarColor();
    chooseCarColor('roxo');

?>