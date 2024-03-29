<?php
    session_start();

    require "dropdowns.php";
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Submission</title>
  <link rel="stylesheet" type="text/css" href="speedrunSS.css">
  <script src="submitJava.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
      <h1>Submission</h1>
    </header>

    <div class='background'>
        <form action="insertRun.php" method="POST">
            <table>
                <tr><td class='col1'>Time:</td><td class='col2'><input type='text' id='time' name='time' required></td></tr>
                <tr><td class='col1'>Game:</td><td class='col2'><select id='gameSelect' name='game_id' onChange='generateCatDropdown()'><option value='0'>Select a Game</option> <?php generateGameDropdown(); ?> </select></td></tr>
                <tr><td class='col1'>Run Catagory:</td><td class='col2'><select id='runCategory' name='cat_id'></select></td></tr>
                <tr><td class='col1'>Platform:</td><td class='col2'>
                    <select id='platform' name='plat_id'>
                        <option value='1'>PC</option>
                        <option value='2'>Playstation 4</option>
                        <option value='3'>Xbox One</option>
                        <option value='4'>Nintendo Switch</option>
                        <option value='5'>Nintendo 64</option>
                        <option value='6'>Super Nintendo</option>
                    </select></td></tr>
                <tr><td><button class='col1' onclick="window.location.href='userPage.php'">Profile</button></td><td><button class='col2' type="submit">Submit Run</button></td></tr>
            </table>
        </form>
    </div>
</body>
</html>