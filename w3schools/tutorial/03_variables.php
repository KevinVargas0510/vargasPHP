<!DOCTYPE html>
<html>
    <body>

        <?php
        $txt = "Hello world!";
        $x = 5;
        $y = 10.5;
        ?>

        <?php
        $txt = "W3Schools.com";
        echo "I love $txt!";
        ?> 

        <?php
        $txt = "W3Schools.com";
        echo "I love " . $txt . "!";
        ?>

        <?php
        $x = 5;
        $y = 4;
        echo $x + $y;
        ?>

        <?php
        $x = 5; // global scope

        function myTest1() {
            //using x inside this function will generate an error
            echo "<p>Variable x inside function is: $x</p>";
        }

        myTest1();

        echo "<p>Variable x outside function is: $x</p>";
        ?>

        <?php

        function myTest2() {
            $x = 5; // local scope
            echo "<p>Variable x inside function is: $x</p>";
        }

        myTest2();

        // using x outside the function will generate an error
        echo "<p>Variable x outside function is: $x</p>";
        ?>

        <?php
        $x = 5;
        $y = 10;

        function myTest() {
            global $x, $y;
            $y = $x + $y;
        }

        myTest();
        echo $y; // outputs 15
        ?>

        <?php
        $x = 5;
        $y = 10;

        function myTest() {
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        myTest();
        echo $y; // outputs 15
        ?>

    </body>
</html>