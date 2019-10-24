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

    <?php//<button onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login</button>?>

<div id="login" class="modal">
  
  <form action="login.php" method="post">
     
  <form class="modal-content" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

  <script>
// Get the modal
var modal = document.getElementById('login');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</div>
    

</body>
</html>