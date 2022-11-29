<!DOCTYPE html>
<html>
    <body>
        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        ?>

        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo count($cars);
        ?>

        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        ?>

        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        $arrlength = count($cars);

        for ($x = 0; $x < $arrlength; $x++) {
            echo $cars[$x];
            echo "<br>";
        }
        ?>

        <?php
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
        echo "Peter is " . $age['Peter'] . " years old.";
        ?>

        <?php
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

        foreach ($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
        ?>

        <?php
        echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
        echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
        echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
        echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";
        ?>

        <?php
        for ($row = 0; $row < 4; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
                echo "<li>" . $cars[$row][$col] . "</li>";
            }
            echo "</ul>";
        }
        ?>

        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        sort($cars);
        ?>

        <?php
        $numbers = array(4, 6, 2, 22, 11);
        sort($numbers);
        ?>

        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        rsort($cars);
        ?>

        <?php
        $numbers = array(4, 6, 2, 22, 11);
        rsort($numbers);
        ?>

        <?php
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
        asort($age);
        ?>

        <?php
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
        ksort($age);
        ?>

        <?php
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
        arsort($age);
        ?>

        <?php
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
        krsort($age);
        ?>
    </body>
</html>