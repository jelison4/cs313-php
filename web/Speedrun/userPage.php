<?php
  session_start();
  require 'databaseConnect.php';
  $db=get_db();

  function userTable(){
    $db=get_db();
    $tableQuery="SELECT DISTINCT game.title, run.time, category.category_title, platform.name, run.valid FROM users, run, platform, category, game WHERE run.user_id = users.id AND users.username="."'".$_SESSION['uname']."'"." AND platform_id = platform.id AND run.game_id = game.id AND run.category_id = category.id ORDER BY run.time;";
    $table=$db->query($tableQuery);
    
    if($table->fetch(PDO::FETCH_ASSOC) == null){
      echo '<tr><th>'.$_SESSION['uname'].'has no submitions</th><tr>';
    }

    $title=0;
    while ($row = $table->fetch(PDO::FETCH_ASSOC)){
      if($title==0){
          echo '<tr><th colspan=5><h2>'.$_SESSION['uname']. "'s Submissions</h2></th></tr>";
          echo '<tr><th>Game</th><th>Time</th><th>Category</th><th>Platform</th><th>Validity</th></tr>';
          $title=1;
      }
      echo '<tr><td>'.$row['title'].'</td><td>'.formatTime($row['time']).'</td><td>'.$row['category_title'].'</td><td>'.$row['name'].'</td>'.valitity($row['valid']).'</td></tr>';
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
    <header>
        <h1>Working title</h2>
    </header>

    <div class=background>
    
    <table>
      <?php userTable(); ?>
      <tr>
        <td colspan='3'><form action='home.php' method='post'><button type="submit">Return to Leaderboard</button></form></td>
        <td colspan='2'><form action='submit.php' method='post'><button type="submit">Submit Run</button></form></td>
      </tr>
    </table>
    
    </div>

</body>
</html>