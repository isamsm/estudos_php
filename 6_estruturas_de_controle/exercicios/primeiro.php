<?php

    //Variáveis recebendo idades. Verificar se idades são maiores ou iguais a 18. Mandar mensagem se a pessoa for maior de 18

    $primeira_pessoa = 'Julia';
    $primeira_idade = 15;
    $segunda_pessoa = 'Larissa';
    $segunda_idade = 18;
    $terceira_pessoa = 'Pablo';
    $terceira_idade = 39;

    $maioridade = 18;

    if($primeira_idade >= $maioridade) {
        echo $primeira_pessoa, ' é maior de idade';
    }

    if($segunda_idade >= $maioridade) {
        echo $segunda_pessoa, ' é maior de idade';
    }

    echo '<br>';

    if($terceira_idade >= $maioridade) {
        echo $terceira_pessoa, ' é maior de idade';
    }

?>