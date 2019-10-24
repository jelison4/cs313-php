<?php 
  require "dropdowns.php";
  generateGameDropdown();
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Speed Running!!</title>
  <link rel="stylesheet" type="text/css" href="speedrunSS.css">
  <script src="speedrunJava.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
      <h1>SPEEDRUN!!!!(Working Title)</h1>
    </header>

    <div class='background'>
      <table>
        <tr>
            <td><strong>Select a game:</strong></td>
            <td><select id='gameSelect' onChange='generateCatDropdown()'><option value='0'>Select a Game</option><?php generateGameDropdown(); ?></select></td>
            <td><strong>Filter by category type:</strong></td>
            <td><select id='runCategory' onChange='generateTable()'><option value=''>-</option></select></td>
        </tr>
      </table>
    
      <table id='runTable'></table>
      <br>
      <table>
          <tr>
            <td><button class='col1' onclick="document.getElementById('login').style.display='block'">Login</button></td>
            <td><button class='col2' onclick=''>Register</button></td>
          </tr>
      </table>
    </div>
</div>
    

</body>
</html>