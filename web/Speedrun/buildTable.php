<?php
    // Connect to the database
    require "databaseConnect.php";
    $db = get_db();

    // get the query variables
    $game=$_GET['gameID'];
    $category=$_GET['catID'];

    // if the category is category.id it means that the 'All' option was selected
    if($category!='category.id'){
        $query='SELECT DISTINCT users.username, run.time, platform.name, run.valid, game.title, category.category_title FROM users, run, platform, category, game WHERE run.user_id = users.id AND platform_id = platform.id AND run.game_id = '.$game.' AND run.category_id = '.$category.' AND category.id = '.$category.' AND game.id='.$game.'ORDER BY run.time;';
        $statement = $db->query($query);

        $title=0;
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            if($title==0){
                echo '<tr><th colspan=5><h2>'.$row['title'].' - '.$row['category_title'].'</h2></th></tr><tr><th>User</th><th>Time</th><th>Platform</th><th>Validity</th></tr>';
                $title=1;
            }
            echo '<tr><td>'.$row['username'].'</td><td>'.formatTime($row['time']).'</td><td>'.$row['name'].'</td>'.valitity($row['valid']).'</td></tr>';
       }
    }
    else{
        $query='SELECT DISTINCT users.username, run.time, category.category_title, platform.name, run.valid, game.title FROM users, run, platform, category, game WHERE run.user_id = users.id AND platform_id = platform.id AND run.category_id = category.id AND run.game_id='.$game.' AND game.id='.$game.' ORDER BY run.time;';
        $statement = $db->query($query);

        $title=0;
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            if($title==0){
                echo '<tr><th colspan=5><h2>'.$row['title'].'</h2></th></tr><tr><th>User</th><th>Time</th><th>Category</th><th>Platform</th><th>Validity</th></tr>';
                $title=1;
            }
            echo '<tr><td>'.$row['username'].'</td><td>'.formatTime($row['time']).'</td><td>'. $row['category_title'] .'</td><td>'.$row['name'].'</td>'.valitity($row['valid']).'</td></tr>';
        }
    }
    
    // Trims the leading 0's and :'s
    function formatTime($time){
        $fTime = ltrim($time, "0");
        $fTime = ltrim($fTime, ":");
        $fTime = ltrim($fTime, "0");
        
        return $fTime;
    }

    // changes the bool value for valid into text and 
    function valitity($valid){
        $status=null;
        If($valid==1){
            $status='<td class="valid">Validated';
        }

        else{
            $status='<td class="invalid">Not Validated';
        }

        return $status;
    }
?>