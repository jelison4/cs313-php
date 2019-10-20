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
  <title>Submission</title>
  <link rel="stylesheet" type="text/css" href="speedrunSS.css">
  <script src="speedrunJava.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class='full-width-borders'>
      <h1>Submission</h1>
    </header>

    <div class='background'>
        <form>
            <table>
                <tr><td>Username:</td><td><input type='text' id='username'></td></tr>
                <tr><td>Game:</td><td><select id='gameSelect' onChange='generateCatDropdown()'><?php generateGameDropdown() ?></select></td></tr>
                <tr><td id='runCategory'>Run Catagory:</td></tr>
            </table>
        </form>
    </div>
</body>
</html>