<?php
  session_start();
  require 'databaseConnect.php';
  $db=get_db();

  function displayTable(){
    if($_SESSION['uname']=='admin'){
      adminTable();
    }else{
      userTable();
    }

  }

  function adminTable(){
    $db=get_db();
    $tableQuery="SELECT DISTINCT run.id, game.title, run.time, category.category_title, platform.name, run.valid FROM users, run, platform, category, game WHERE run.user_id = users.id AND valid = false AND platform_id = platform.id AND run.game_id = game.id AND run.category_id = category.id ORDER BY run.time;";
    $adminTable=$db->query($tableQuery);

    $title=0;

    while ($row = $adminTable->fetch(PDO::FETCH_ASSOC)){
      if($title==0){
        echo'<tr><th colspan=6><h2>Submissions that Need to be Validated</h2></th></tr><tr><th>Game</th><th>Time</th><th>Category</th><th>Platform</th><th>Validity</th></tr>';
        $title=1;
      }
      echo '<tr><td>'.$row['title'].'</td><td>'.formatTime($row['time']).'</td><td>'.$row['category_title'].'</td><td>'.$row['name'].'</td>'.valitity($row['valid']).'</td><td><button class="cancelbtn" onclick=validateRun('.$row['id'].')>Validate</button></td></tr>';
    }
  }

  function userTable(){
    $db=get_db();
    $tableQuery="SELECT DISTINCT run.id, game.title, run.time, category.category_title, platform.name, run.valid FROM users, run, platform, category, game WHERE run.user_id = users.id AND users.username="."'".$_SESSION['uname']."'"." AND platform_id = platform.id AND run.game_id = game.id AND run.category_id = category.id ORDER BY run.time;";
    $table=$db->query($tableQuery);
    
    $title=0;

    while ($row = $table->fetch(PDO::FETCH_ASSOC)){
      if($title==0){
        echo '<tr><th colspan=6><h2>'.$_SESSION['uname']. "'s Submissions</h2></th></tr>";
        echo '<tr><th>Game</th><th>Time</th><th>Category</th><th>Platform</th><th>Validity</th></tr>';
        $title=1;
      }
      echo '<tr><td>'.$row['title'].'</td><td>'.formatTime($row['time']).'</td><td>'.$row['category_title'].'</td><td>'.$row['name'].'</td>'.valitity($row['valid']).'</td><td><button class="cancelbtn" onclick=removeRun('.$row['id'].')>Remove</button></td></tr>';
    }
    
    if($title==0){
      echo '<tr><th style="text-align:center;"> You do not have any submitions</th><tr>';
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
  <title><?php echo $_SESSION['uname']. "'s Runs"; ?></title>
  <link rel="stylesheet" type="text/css" href="speedrunSS.css">
  <script src="speedrunJava.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <h1>Dual Quasars</h1>
    </header>

    <div class=background>
    
    <table>
      <?php displayTable(); ?>
      <tr>
        <td colspan='3' class='col1'><button onclick="window.location.href='home.php'">Return to Leaderboard</button></td>
        <td colspan='3' class='col2'><button onclick="window.location.href='submit.php'">Submit Run</button></td>
      </tr>
    </table>
    
    </div>

</body>
</html>