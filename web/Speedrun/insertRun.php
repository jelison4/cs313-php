<?php
  require 'databaseConnect.php';
  session_start();
  $db=get_db();

  $user_id=getUserID();
  $game_id=$_POST['game_id'];
  $plat_id=$_POST['plat_id'];
  $time=$_POST['time'];
  $cat_id=$_POST['cat_id'];

  echo $_SESSION['uname']."<br>".$user_id."<br>".$game_id."<br>".$plat_id."<br>".$time."<br>".$cat_id."<br>";
    
  $insertQuery="INSERT INTO run (user_id, game_id, platform_id, time, valid, category_id) VALUES ($user_id, $game_id, $plat_id,"."'". $time."'".", false, $cat_id);";
  echo $query;

  $db->query($insertQuery);

  function getUserID(){
    $idQuery="SELECT id FROM users WHERE username="."'".$_SESSION['uname']."';";
    $db=get_db();

    $statement = $db->query($idQuery);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
   
    return $row['id'];
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

<div class='background'>
  It worked.
</div>

</body>
</html>