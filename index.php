<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tankrechner</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="form_container">
    <form action="index.php">
  <label for="liter1">Tank 1:</label><br>
   <input type="text" id="liter1" name="liter1" placeholder="0"><br>
  <label for="liter2">Tank 2:</label><br>
   <input type="text" id="liter2" name="liter2" placeholder="0"><br>
      <button type="submit">Click meeee</button>
    </form>
    </div>
  </body>
</html>

<?php
$liter1 = 0;
$liter2 = 0;

if (isset($_REQUEST["liter1"]) && isset($_REQUEST["liter2"]) ) {

  $liter1 = $_REQUEST["liter1"];
  $liter2 = $_REQUEST["liter2"];

  $result1 = $liter1 * 1.499;
  $result2 = $liter2 * 1.499;

  echo "<p class='output'>Die Benzinkosten betragen für ". $liter1 + $liter2 .  " Liter ". str_replace(".",",", $result1 + $result2) . " €</p>";

}

?>