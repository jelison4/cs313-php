<?php
  session_start();

  if (!isset($_SESSION['games'])) {
    $_SESSION['games'] = [];
   }

  function displayAddress(){
    echo '<p>'.$_POST["address"].'<br>'. $_POST["city"] .", ". $_POST["State"] ." ". $_POST["zip"] . '</p>';
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
    <?php 
      displayAddress();
      foreach($_SESSION['games'] as $game){
        $game->display();
      }

      var_dump($_SESSION['games']);
    ?>
</body>
</html>