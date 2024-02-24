<?php

    //criar um array de 1 a 30 e uma função que pega os valores dele acima de 7 e cria um novo array

    $arr = [];

    for($i = 0; $i < 30; $i++) {
        array_push($arr, $i);
    }

    // print_r($arr);

    function arrNum($arrValue) {

        $arrReturn = [];

        for ($n = 0; $n < count($arrValue); $n++) {
            if($arrValue[$n] > 7) {
                array_push($arrReturn, $arrValue[$n]);
            }
        }

        return $arrReturn;
    }

    $newArr = arrNum($arr);

    print_r($newArr);

?>