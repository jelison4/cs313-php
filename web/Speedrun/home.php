<?php 
  require "dropdowns.php";
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
            <td><button class='col2' onclick="document.getElementById('register').style.display='block'">Register</button></td>
          </tr>
      </table>
    </div>


    <div id="login" class="modal">
      <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
    
      <form class="modal-content background" action="userPage.php">
    
        <div class="container">
        <br>
        <h2>Login</h2>
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" id='uname' required>
    
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>
    
        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <button type="submit">Login</button>
          <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>

    <div id="register" class="modal">
      <span onclick="document.getElementById('register').style.display='none'" class="close" title="Close Modal">&times;</span>
    
      <form class="modal-content background" action="addUser.php" method="post">
    
        <div class="container">
          <br>
          <h2>Create New Account</h2>
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" id='newName' required>
    
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="newPass" required>
    
        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <button type="submit">Register</button>
          <button type="button" onclick="document.getElementById('register').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>

</body>
</html>