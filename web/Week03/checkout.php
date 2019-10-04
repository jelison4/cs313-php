<?php
   
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <link rel="stylesheet" type="text/css" href="W03SS.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <h1>Checkout</h1>

  <form action="confirmation.php" method="POST">
      <table>
        <tr><td>Address:</td><td><input type="text" name="address"></td></tr>
        <tr><td>City:</td><td><input type="text" name="city"></td></tr>
        <tr><td>State:</td><td><input type="text" name="State" maxlength="2" style="text-transform: uppercase;"></td></tr>
        <tr><td>Zip Code:</td><td><input type="text" name="zip"></td></tr>
        <tr><td colspan="2"><input type="submit" value="Complete Order"> </td></tr>
      </table>
  </form>
</body>
</html>