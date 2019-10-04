<?php
   
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
  <h1>Checkout</h1>

  <form action="confirmation.php" method="POST">
      <table>
        <tr><td>Address:</td><td><input type="text" id="address"></td></tr>
        <tr><td>City:</td><td><input type="text" id="city" maxlength="2" onkeyup="this.value = this.value.toUpperCase();"></td></tr>
        <tr><td>State:</td><td><input type="text" id="State"></td></tr>
        <tr><td>Zip Code:</td><td><input type="text" id="zip"></td></tr>
        <tr><td colspan="2" style="text-align:right"><input type="submit" value="Complete Order"> </td></tr>
      </table>
  </form>
</body>
</html>