<?php
  include ('game.php');
  session_start();

  $sGames=file_get_contents('cart');
  $_SESSION['games']=unserialize($sGames);

  if (!isset($_SESSION['games'])) {
    $_SESSION['games'] = [];
   }

   print_r( $_SESSION );

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
    ?>
    <table>
      <tr><th>Title</th><th>Quantity</th><th>Price</th></tr>
      <?php
        foreach($_SESSION['games'] as $game){
          $game->display();
        }   
      ?>
    </table>
</body>
</html>