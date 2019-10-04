<?php
  session_start();
  $_SESSION["address"]=$_POST["address"];
  $_SESSION["city"]=$_POST["city"];
  $_SESSION["State"]=$_POST["State"];
  $_SESSION["zip"]=$_POST["zip"];

  function displayAddress(){
      echo $_SESSION["address"] . "<br>".
           $_SESSION["city"] .", ". $_SESSION["State"] ." ". $_SESSION["zip"];
  }
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Confirmation</title>
  <link rel="stylesheet" type="text/css" href="W03SS.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php displayAddress(); ?>
</body>
</html>