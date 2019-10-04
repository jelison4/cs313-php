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

     function displayCart(){
      setlocale(LC_MONETARY, 'en_US');
      echo "<tr><td style='text-align: center'>" . $this->getTitle() . "</td><td style='text-align: center'>" . $this->getQuantity() . 
            "<td class='money'>$" . money_format('%i', $this->getPrice()*$this->getQuantity()) . "</td><td><button onclick='removeFromCart(".'"'.$this->getTitle().'"'.")'>Remove</button></td></tr>";
     }

     function display(){
        setlocale(LC_MONETARY, 'en_US');
        echo "<tr><td style='text-align: center'>" . $this->getTitle() . "</td><td style='text-align: center'>" . $this->getQuantity() . 
              "<td class='money'>$" . money_format('%i', $this->getPrice()*$this->getQuantity()) . "</td></tr>";
       }
   }
?>