<?php
  include ("game.php");
  session_start();
  
  $game = new Game();

  if($game->getPrice() != 0){
    // Check if the games array is empty
    if(!empty($_SESSION['games'])){
      //initialize veriable for if the game is already in the array
      $inArray=false;

      // Loop through the array and check to see if the game is already in the array
      foreach($_SESSION['games'] as $igames){
        // Check titles against eachother 
        if($game->getTitle()==$igames->getTitle()){
          // If a duplacate is found set inArray as true and add the quantitys together
          $inArray=true;
          $igames->addQuantity($game->getQuantity());
        }
      }

      // If the game isn't in the array add it
      if(!$inArray){
        array_push($_SESSION['games'], $game);
      }
    }

    // If the games array is empty create it with the first game
    else{
      $_SESSION['games'] = array($game);
    }
   }

   function removeFromCart($title){
     foreach($_SESSION['games'] as $game){
       if($game->getTitle()==$title){
        $_SESSION['games'] = \array_diff($_SESSION['games'], [$game]);
       }
      }
   }   
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Week 03: Shopping Cart</title>
  <link rel="stylesheet" type="text/css" href="W03SS.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<script src="W03Java.js"></script>
  <h1>Shopping Cart</h1>
<table class='background'>
    <?php
    // Check to see if anything is in the cart
    if(!empty($_SESSION['games'])){
      $total = 0;
      
      // Display header row of table
      echo "<tr><th>Title</th><th>Quantity</th><th>Price</th></tr>";

      // Loop through array and display each entry
      foreach($_SESSION['games'] as $game){
        $game->displayCart();

        // Add the price of each game to the total
        $total+= ($game->getPrice()*$game->getQuantity());
      }

      $_SESSION['total']=$total;
      $sGames= serialize($_SESSION['games']);
      file_put_contents('cart', $sGames);

      // Display total at the bottom
      echo "<tr><td class='money' colspan=3><b>Total</b> $" . money_format('%i', $total) . "</td></tr>
            <tr>
              <form>
                <td><button type='submit' formaction='items.php'>Return to Browse</button></td>
                <td colspan=2 style='text-align:right'><button type='submit' formaction='checkout.php'>Checkout</button></td>
              </form></tr>";
    }

    // It the cart is empty display message
    else{
      echo "<tr><td style='text-align: center'><br>Your cart is empty.<br></td></tr>
            <tr><form><td><button type='submit' formaction='items.php'>Return to Browse</button></td></tr>";
    }
    ?>
</table>
</body>
</html>