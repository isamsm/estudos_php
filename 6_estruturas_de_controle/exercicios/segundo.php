<?php

    //Complementação do 22, adicionar um else para pessoas menor de idade.

    $primeira_pessoa = 'Julia';
    $primeira_idade = 15;
    $segunda_pessoa = 'Larissa';
    $segunda_idade = 18;
    $terceira_pessoa = 'Pablo';
    $terceira_idade = 39;

    $maioridade = 18;

    if($primeira_idade >= $maioridade) {
        echo $primeira_pessoa, ' é maior de idade';
    } else {
        echo $primeira_pessoa, ' é menor de idade';
    }

    echo '<br>';

    if($segunda_idade >= $maioridade) {
        echo $segunda_pessoa, ' é maior de idade';
    } else {
        echo $segunda_pessoa, ' é menor de idade';
    }

    echo '<br>';

    if($terceira_idade >= $maioridade) {
        echo $terceira_pessoa, ' é maior de idade';
    } else {
        echo $terceira_pessoa, ' é menor de idade';
    }

?>