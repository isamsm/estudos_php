<?php

    //console.log do php, var_dump, print_r. var_dump é considerado mais legivel aos humanos

    $arr = 
    [
        1,
        true, 
        'Amarelo',
        55.6, 
        ['oi', 'ola', 'tchau']
    ];

    echo 'PRINT_R: <br />';
    print_r($arr);
    
    echo '<br /> <br />';

    echo 'VAR_DUMP: <br />';
    var_dump($arr);