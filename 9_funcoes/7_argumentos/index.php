<?php

    //funções para aprender mais sobre funções!!

    function plus ($a, $b) {

        //quais os argumentos da função?
        print_r(func_get_args()); 
        echo "<br />";
        //quantos argumentos há na função?
        print_r(func_num_args()); 

        return $a + $b;
    }

    plus(2, 4);