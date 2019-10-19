<?php
    require "databaseConnect.php";

    $db = get_db();

    $game=$_GET['gameID'];
    $category=$_GET['catID'];

    if($category!='category.id'){
        $query='SELECT DISTINCT users.username, run.time, platform.name, run.valid FROM users, run, platform, category WHERE run.user_id = users.id AND platform_id = platform.id AND run.game_id = '.$game.' AND run.category_id = '.$category.' ORDER BY run.time;';
        $statement = $db->query($query);

        echo '<tr><th>User</th><th>Time</th><th>Platform</th><th>Validity</th></tr>';
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo '<tr><td>'.$row['username'].'</td><td>'.formatTime($row['time']).'</td><td>'.$row['name'].'</td>'.valitity($row['valid']).'</td></tr>';
       }
    }
    else{
        $query='SELECT DISTINCT users.username, run.time, category.category_title, platform.name, run.valid FROM users, run, platform, category WHERE run.user_id = users.id AND platform_id = platform.id AND run.game_id = '.$game.' AND run.category_id = category.id ORDER BY run.time;';
        $statement = $db->query($query);
        
        echo '<tr><th>User</th><th>Time</th><th>Catagory</th><th>Platform</th><th>Validity</th></tr>';
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo '<tr><td>'.$row['username'].'</td><td>'.formatTime($row['time']).'</td><td>'.$row['time'].'</td><td>'. $_row['category_title'] .'</td><td>'.$row['name'].'</td><td>'.valitity($row['valid']).'</td></tr>';
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