<?php
    require "databaseConnect.php";

    function displayTable(){
        $db = get_db();
        $query='SELECT users.username, game.title, category.category_title, run.time, platform.name, run.valid FROM users, run, platform, game, category WHERE run.user_id = users.id AND platform_id = platform.id AND run.game_id = game.id AND run.category_id = category.id ORDER BY run.time';
        $statement = $db->query($query);

        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo '<tr><td>'.$row['username'].'</td><td>'.$row['title'].'</td><td>'.$row['category_title'].'</td><td>'.formatTime($row['time']).'</td><td>'.$row['name'].'</td><td>'.$row['valid'].'</td></tr>';
        }
    }

    function formatTime($time){
        $fTime = ltrim($time, "0");
        $fTime = ltrim($fTime, ":");
        $fTime = ltrim($fTime, "0");
        
        return $fTime;
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
    <table>
        <tr><th>User</th><th>Game</th><th>Category</th><th>Time</th><th>Platform</th><th>Validation</th></tr>
        <?php displayTable(); ?>
    </table>
</body>
</html>