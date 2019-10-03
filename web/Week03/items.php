<?php
   session_start();
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

<h1>The Game Place</h1>
<br>
<table>
    <tr><th>Game</th>                                 <th>Platform</th>             <th>Price</th><th></th></tr>
    <tr><td>Banjo-Kazooie</td>                        <td>N64</td>    <td class="money">$15.00</td><td class="buttonCell"><button onclick="addToCart('Banjo-Kazooie',1)">Add to Cart</button></td></tr>
    <tr><td>Chrono Trigger</td>                       <td>SNES</td>   <td class="money">$75.00</td><td class="buttonCell"><button onclick="addToCart('Chrono Trigger',1)">Add to Cart</button></td></tr>
    <tr><td>Earthbound</td>                           <td>SNES</td>   <td class="money">$150.00</td><td class="buttonCell"><button onclick="addToCart('Earthbound',1)">Add to Cart</button></td></tr>
    <tr><td>Final Fantasy VII</td>                    <td>PS1</td>    <td class="money">$500.00</td><td class="buttonCell"><button onclick="addToCart('Final Fantasy VII',1)">Add to Cart</button></td></tr>
    <tr><td>The Legend of Zelda: Link to the Past</td><td>SNES</td>   <td class="money">$100.00</td><td class="buttonCell"><button onclick="addToCart('The Legend of Zelda: Link to the Past',1)">Add to Cart</button></td></tr>
    <tr><td>The Legend of Zelda: Ocarina of Time</td> <td>N64</td>    <td class="money">$200.00</td><td class="buttonCell"><button onclick="addToCart('The Legend of Zelda: Ocarina of Time',1)">Add to Cart</button></td></tr>
    <tr><td>Pokemon Blue</td>                         <td>Gameboy</td><td class="money">$60.00</td><td class="buttonCell"><button onclick="addToCart('Pokemon Blue',1)">Add to Cart</button></td></tr>
    <tr><td>Pokemon Snap</td>                         <td>N64</td>    <td class="money">$15.00</td><td class="buttonCell"><button onclick="addToCart('Pokemon Snap',1)">Add to Cart</button></td></tr>
    <tr><td>Suikoden</td>                             <td>PS1</td>    <td class="money">$350.00</td><td class="buttonCell"><button onclick="addToCart('Suikoden',1)">Add to Cart</button></td></tr>
    <tr><td>Super Mario Brothers</td>                 <td>SNES</td>   <td class="money">$450.00</td><td class="buttonCell"><button onclick="addToCart('Super Mario Brothers',1)">Add to Cart</button></td></tr>
    <tr><td>Super Smash Brothers</td>                 <td>N64</td>    <td class="money">$225.00</td><td class="buttonCell"><button onclick="addToCart('Super Smash Brothers',1)">Add to Cart</button></td></tr>
    <tr><td></td><td></td><td></td><td><a href="cart.php"><img src="icons8-shopping-cart-96.png" alt="Shopping Cart"></a> </td></tr>

</table>

</body>
</html>