<?php
  include ('game.php');
  session_start();

  $sGames=file_get_contents('cart');
  $_SESSION['games']=unserialize($sGames);

  if (!isset($_SESSION['games'])) {
    $_SESSION['games'] = [];
   }

  function displayAddress(){
    echo $_POST["address"].'<br>'. $_POST["city"] .", ". $_POST["State"] ." ". $_POST["zip"];
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
    <p style="text-align:center">
        Please confirm that your address is <br>
        <?php displayAddress(); ?>
        <button onclick="checkout.php">Change</button>
    </p>
    <br>
    <table>
      <tr><td colspan='3'>and that you ordered:</td></td>
      <tr><th>Title</th><th>Quantity</th><th>Price</th></tr>
      <?php
        foreach($_SESSION['games'] as $game){
          $game->display();
        }   
      ?>
    </table>
    
</body>
</html>