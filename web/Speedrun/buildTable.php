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
            $status='<td class="valid">Validated';
        }

        else{
            $status='<td class="invalid"> Not Validated';
        }

        return $status;
    }
?>