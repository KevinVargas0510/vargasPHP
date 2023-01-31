<?php
  $days = array("Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato", "Domenica");
  $weather = array("sunny", "rainy", "cloudy");
  $city = "";
  
  // Check if the city was already entered by the user
  if (isset($_COOKIE["city"])) {
    $city = $_COOKIE["city"];
  }
  
  // If a new city was entered, set the cookie
  if (isset($_POST["city"])) {
    $city = $_POST["city"];
    setcookie("city", $city, time() + 3600);
  }
  
  // Generate random weather forecast for each day
  $forecast = array();
  for ($i = 0; $i < count($days); $i++) {
    $randomIndex = rand(0, count($weather) - 1);
    $forecast[$days[$i]] = $weather[$randomIndex];
  }
?>

<html>
  <head>
    <title>Weather Forecast</title>
  </head>
  <body>
    <h1>Meteo per <?= $city; ?></h1>
    <form action="" method="post">
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
  </body>
</html>
