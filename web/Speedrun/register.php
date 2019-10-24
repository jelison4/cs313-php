<?php
  
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Speed Running!!</title>
  <link rel="stylesheet" type="text/css" href="speedrunSS.css">
  <script src="registerJava.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
      <h1>Register</h1>
    </header>

    <div class='background'>
        <form id='register' action='addUser.php'>
            <table>
                <tr><td class='col1'><b>Username:</b></td><td><input type="text" name="uname" id='uname' required></td></tr>
                <tr><td class='col1'><b>Password:</b></td><td><input type="password" name="password1" id="password1" required></td></tr>
                <tr><td colspan="2"><button style="text-align:center">Register</button></td></tr>
            </table>
        </form>    
    </div>
</body>
</html>