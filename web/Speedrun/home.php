<?php
    require "databaseConnect.php";

    function generateGameDropdown(){
        $db = get_db();
        $gameQuery='SELECT DISTINCT run.game_id, game.title FROM run, game WHERE run.game_id = game.id ORDER BY game.title';
        $statement = $db->query($gameQuery);

        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo "<option value=" . $row['game_id']  . ">" . $row['title'] . "</option>";
        }
    }

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
    <header class='full-width-borders'>
      <h1><div class='wrap'>SPEEDRUN!!!!(Working Title)</div></h1>
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
    
    <button onclick="submition.php">Submit Run</button>

    </div>
</body>
</html>