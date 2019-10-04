<?php
  session_start();
  $address=$_GET["address"];
  $city=$_POST["city"];
  $State=$_POST["State"];
  $zip=$_POST["zip"];

  function displayAddress(){
    $address=$_GET["address"];
    $city=$_POST["city"];
    $State=$_POST["State"];
    $zip=$_POST["zip"];
    echo '<p>'. $address . "<br>".
          $city .", ". $State ." ". $zip . '</p>';
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
    <p>
        does this work?
      <?php displayAddress(); ?>
    </p>
</body>
</html>