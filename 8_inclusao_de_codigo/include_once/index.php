<?php

    //incluir arquivo apenas uma vez, mesmo com mais de uma chamada

    //arquivo que não existe, gera warning
    // include_once 'online.php';

    include_once 'teste.php';
    include_once 'teste.php';

?>

<p> depois do include </p>