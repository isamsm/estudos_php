<?php

    function test() {
        $n = 0;
        $n++;

        echo "$n <br>";
    }

    test();
    test();
    test();

    function testStatic() {
        static $n = 0;
        $n++;

        echo "$n <br>";
    }

    testStatic();
    testStatic();
    testStatic();

?>