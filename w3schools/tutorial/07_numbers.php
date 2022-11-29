<!DOCTYPE html>
<html>
    <body>
        <?php
        $x = 5985;
        var_dump(is_int($x));

        $x = 59.85;
        var_dump(is_int($x));
        ?>

        <?php
        $x = 10.365;
        var_dump(is_float($x));
        ?>

        <?php
        $x = 1.9e411;
        var_dump($x);
        ?>

        <?php
        $x = acos(8);
        var_dump($x);
        ?>

        <?php
        $x = 5985;
        var_dump(is_numeric($x));

        $x = "5985";
        var_dump(is_numeric($x));

        $x = "59.85" + 100;
        var_dump(is_numeric($x));

        $x = "Hello";
        var_dump(is_numeric($x));
        ?>
    </body>
</html>