<?php

    class Person {

        function speak() {
            echo "Olá!";
        }

    }

    $isa = new Person();

    echo "<br>";

    $isa->age = 20;

    echo "<br>";

    echo $isa->age;

    echo "<br>";

    $isa->speak();

?>