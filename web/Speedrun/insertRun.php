<?php
  require 'databaseConnect.php';
  
  session_start();
  //$db=get_db();

  $user_id=getUserID();
  $game_id=$_POST['game_id'];
  $plat_id=$_POST['plat_id'];
  $time=$_POST['time'];
  $cat_id=$_POST['cat_id'];

  echo $_SESSION['uname']."<br>".$user_id."<br>".$game_id."<br>".$plat_id."<br>".$time."<br>".$cat_id."<br>";
    
  $query="INSERT INTO run (user_id, game_id, platform_id, time, valid, category_id) VALUES ($user_id, $game_id, $plat_id, $time, 0, $cat_id);";
  echo $querty;
/*
  $db->query($query);
*/
  function getUserID(){
    $idQuery="SELECT id FROM users WHERE username="."'".$_SESSION['uname']."';";
    $db=get_db();

    $statement = $db->query($idQuery);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    
    echo $row['id'];

    return $row['id'];
  }
  
?>