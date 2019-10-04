<?php
  session_start();

  $_SESSION["address"]=$_POST["address"];

  function displayAddress(){
    echo '<p>'.$_SESSION["address"].'<br>'. $_POST["city"] .", ". $_POST["State"] ." ". $_POST["zip"] . '</p>';
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