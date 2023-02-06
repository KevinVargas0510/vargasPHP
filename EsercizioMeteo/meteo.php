<?php
$days = array("Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato", "Domenica");
$weather = array("sunny", "rainy", "cloudy");
$city = "";
$cities = array();

if (isset($_COOKIE["city"])) {
    $city = $_COOKIE["city"];
}

if (isset($_COOKIE["cities"])) {
    $cities = json_decode($_COOKIE["cities"]);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $city = $_POST["city"];
    setcookie("city", $city, time() + 3600);

    if (!in_array($city, $cities)) {
        $cities[count($cities)] = $city;
        setcookie("cities", json_encode($cities), time() + 3600);
    }
}

$forecast = array();
srand(crc32($city));

for ($i = 0; $i < count($days); $i++) {
    $randomIndex = rand(0, count($weather) - 1);
    $forecast[$days[$i]] = $weather[$randomIndex];
}
?>

<html>
    <head>
        <title>Meteo</title>
    </head>
    <body>
        <h1>Meteo per <?= $city; ?></h1>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <label>Cerca località: <input type="text" name="city"></label>
            <input type="submit" value="Cerca">
        </form>
        <table>
            <tr>
                <th>Giorno</th>
                <th>Meteo</th>
            </tr>
            <?php
            foreach ($forecast as $day => $condition) {
                ?>
                <tr>
                    <td>
                        <?= $day ?>
                    </td>
                    <td>
                        <img src="./Img/<?= $condition ?>.jpg" style="width:50px;height:50px;">
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

        <?php
        foreach ($cities as $c) {
            ?>
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <input type="hidden" name="city" value="<?= $c ?>">
                <input type="submit" value="<?= $c ?>">
            </form>
            <?php
        }
        ?>

    </body>
</html>
