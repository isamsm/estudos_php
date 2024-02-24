<?php

    //uma lista de supermercado na qual se deve separar os itens do array com virgula, os transformando em string

    $shopList = ['melancia', 'banana', 'farinha'];

    function marketArr($arr) {
        $str = 'Itens: ';
        for($i = 0; $i < count($arr); $i++) {
            if($i + 1 == count($arr)) {
                $str .= "$arr[$i].";
            } else {
                $str .= "$arr[$i], ";
            }
        }
        echo $str;
    }

    marketArr($shopList);