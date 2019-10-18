<?php
    require "databaseConnect.php";

    function displayTable(){
        $db = get_db();
        $query='SELECT users.username, game.title, category.category_title, run.time, platform.name, run.valid FROM users, run, platform, game, category WHERE run.user_id = users.id AND platform_id = platform.id AND run.game_id = game.id AND run.category_id = category.id ORDER BY run.time';
        $statement = $db->query($query);

        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo '<tr><td>'.$row['username'].'</td><td>'.$row['title'].'</td><td>'.$row['category_title'].'</td><td>'.formatTime($row['time']).'</td><td>'.$row['name'].'</td>'.valitity($row['valid']).'</td></tr>';
        }
    }

    function formatTime($time){
        $fTime = ltrim($time, "0");
        $fTime = ltrim($fTime, ":");
        $fTime = ltrim($fTime, "0");
        
        return $fTime;
    }

    function valitity($valid){
        $status=null;
        If($valid==1){
            $status='<td class=valid>Validated';
        }

        else{
            $status='<td class=invalid> Not Validated';
        }

        return $status;
    }

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
    <h1>SPEEDRUN!!!!(Working Title)</h1>

    <table id=runTable>
        <tr>
            <td colspan="3"><select id=gameSelect><option value=''>Select a Game</option><?php generateGameDropdown(); ?></select></td>
            <td colspan="3"><select id=runCategory><option value=''>Select a Category</option></select></td>
        </tr>
        <br>
        <tr><th>User</th><th>Game</th><th>Category</th><th>Time</th><th>Platform</th><th>Validation</th></tr>
        <?php displayTable(); ?>
    </table>
</body>
</html>