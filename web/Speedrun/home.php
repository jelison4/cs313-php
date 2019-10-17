<?php
    require "databaseConnect.php";
/*    $db = get_db();

    $query='SELECT users.username, game.title, category.category_title, run.time, platform.name, run.valid FROM users, run, platform, game, category WHERE run.user_id = users.id AND platform_id = platform.id AND run.game_id = game.id AND run.category_id = category.id ORDER BY run.time';

    $statement = $db->query($query);
*/
    function displayTable(){
        $db = get_db();
        $query='SELECT users.username, game.title, category.category_title, run.time, platform.name, run.valid FROM users, run, platform, game, category WHERE run.user_id = users.id AND platform_id = platform.id AND run.game_id = game.id AND run.category_id = category.id ORDER BY run.time';
        $statement = $db->query($query);
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo '<tr><td colspan=6>' . $row['users.username'] . '</td></tr>';
            echo 'does this work?';
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
    <table>
        <tr><th>User</th><th>Game</th><th>Category</th><th>Time</th><th>Platform</th><th>Validation</th></tr>
        <?php displayTable(); ?>
    </table>
</body>
</html>