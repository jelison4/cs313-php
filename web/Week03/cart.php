<?php
  class Game{
     public $title;
     public $price;
     public $quantity;

     function Game(){
      $this->title = $_GET["title"];
      $this->quantity = $_GET["quantity"];

      $priceMap = array(
       "Banjo-Kazooie"=>15.00,
       "Chrono Trigger"=>75.00,
       "Earthbound"=>150.00,
       "Final Fantasy VII"=>500.00,
       "The Legend of Zelda: Link to the Past"=>100.00,
       "The Legend of Zelda: Ocarina of Time"=>200.00,
       "Pokemon Blue"=>60.00,
       "Pokemon Snap"=>15.00,
       "Suikoden"=>350.00,
       "Super Mario Brothers"=>450.00,
       "Super Smash Brothers"=>225.00
      );

      $this->price = $priceMap[$this->title];
     }

      function getTitle(){
        return $this->title;
      }

      function getPrice(){
        return $this->price;
      }

      function getQuantity(){
        return $this->quantity;
      }

      function addQuantity($num){
        $this->quantity+=$num;
      }

     function display(){
      setlocale(LC_MONETARY, 'en_US');
      echo "<tr><td style='text-align: center'>" . $this->getTitle() . "</td><td style='text-align: center'>" . $this->getQuantity() . "<td class='money'>$" . money_format('%i', $this->getPrice()*$this->getQuantity()) . "</td></tr>";
     }
   }

   session_start();

   $game = new Game();

   if($game->getPrice() != 0){
    if(!empty($_SESSION['games'])){
      
      $inArray=false;

      foreach($_SESSION['games'] as $igames){
        if($game->getTitle()==$igames->getTitle()){
          $inArray=true;
          $igames->addQuantity($game->getQuantity());
        }
      }

      if(!$inArray){
        array_push($_SESSION['games'], $game);
      }
     }
     else{
      $_SESSION['games'] = array($game);
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
  <h1>Shopping Cart</h1>
<table>
    <?php
    if(!empty($_SESSION['games'])){
      $total = 0;
      
      echo "<tr><th>Title</th><th>Quantity</th><th>Price</th></tr>";

      if(!empty($_SESSION['games'])){
        foreach($_SESSION['games'] as $game){
          $game->display();
          $total+= ($game->getPrice()*$game->getQuantity());
        }
      }
      echo "<tr><td class='money' colspan=3><b>Total</b> $" . money_format('%i', $total) . "</td></tr>";
    }
    else{
      echo "<tr><td style='text-align: center'>Your cart is empty.</td></tr>";
    }
    ?>

    <tr><form><td><button type="submit" formaction="items.php">Return to Browse</button></td><td colspan=2><button type="submit" formaction="checkout.php">Checkout</button></td></form></tr>
</table>
</body>
</html>