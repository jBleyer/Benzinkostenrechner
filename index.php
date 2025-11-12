<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tankrechner</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<!-- div for styling purposes -->
    <div class="form_container">

<!-- form sends data to index.php  -->
    <form action="index.php">

<!-- input for number 1-->
  <label for="liter1">Tank 1:</label><br>
   <input type="text" id="liter1" name="liter1" placeholder="0"><br>

<!-- input for number 2-->
  <label for="liter2">Tank 2:</label><br>
   <input type="text" id="liter2" name="liter2" placeholder="0"><br>

<!-- button to submit data -->
      <button type="submit">Click meeee</button>

    </form>
    </div>
  </body>
</html>

<?php
$liter1 = 0;
$liter2 = 0;

//if form is submitted, check if the two URL parameters are set!
if (isset($_REQUEST["liter1"]) && isset($_REQUEST["liter2"]) ) {

  //move value into variables
  $liter1 = $_REQUEST["liter1"];
  $liter2 = $_REQUEST["liter2"];

  //do the calculation as required
  $result1 = $liter1 * 1.499;
  $result2 = $liter2 * 1.499;

  //output variables
  echo "<p class='output'>Die Benzinkosten betragen für ". $liter1 + $liter2 .  " Liter ". str_replace(".",",", $result1 + $result2) . " €</p>";

}

?>