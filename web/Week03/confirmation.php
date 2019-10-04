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
  <h1>Thank You for your Order</h1>
    <div class='background' style="text-align:center">  
        <?php displayAddress(); ?>
        <br>
    <br>
      <table>
        <tr><th>Title</th><th>Quantity</th><th>Price</th></tr>
        <?php
          foreach($_SESSION['games'] as $game){
            $game->display();
          }
          echo "<tr><td class='money' colspan=3><b>Total</b> $" . money_format('%i', $_SESSION['total']) . "</td></tr>";   
        ?>
      </table>
    </div>
    
</body>
</html>