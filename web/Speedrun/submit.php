<?php
    session_start();

    require 'databaseConnect.php';
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
        <form>
            <table>
                <tr><td class='col1'>Time:</td><td class='col2'><input type='text' id='time' required></td></tr>
                <tr><td class='col1'>Game:</td><td class='col2'><select id='gameSelect' onChange='generateCatDropdown()'><option value='0'>Select a Game</option><?php generateGameDropdown(); ?></select></td></tr>
                <tr><td class='col1'>Run Catagory:</td><td class='col2'><select id='runCategory'></select></td></tr>
                <tr><td class='col1'>Platform:</td><td class='col2'><select id='platform'><?php generatePlatformDropdown(); ?></select></td></tr>
                <tr><td colspan="2"><input type="submit"value='Submit'/></td></tr>
            </table>
        </form>
    </div>
</body>
</html>