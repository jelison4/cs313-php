<?php
  class Game{
     public $title;
     public $price;
     public $quantity;

     function __construct($title, $quantity){
       $this->title = $title;
       $this->quantity = $quantity;

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

       $this->price = $priceMap[$title];
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

     function display(){
      setlocale(LC_MONETARY, 'en_US');
      echo "<tr><td>" . $this->getTitle() . "</td><td class='money'>$" . money_format('%i', $this->getPrice()) . "</td></tr>";
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
  <tr><th>Title</th><th>Price</th>
    <?php
      $ChronoTrigger = new Game("Chrono Trigger", 1);
      $Earthbound = new Game("Earthbound",1);
      $games = array($ChronoTrigger, $Earthbound);

      $total = 0;
      foreach($games as $game){
        $game->display();
        $total+= $game->getPrice();
      }

      echo "<tr><td class='money' colspan=2>Total   $" . money_format('%i', $total) . "</td></tr>";
    ?>
</table>
</body>
</html>