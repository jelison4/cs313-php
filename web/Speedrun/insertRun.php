<?php
  require 'databaseConnect.php';
  session_start();
  $db=get_db();

  $user_id=getUserID();
  $game_id=$_POST['game_id'];
  $plat_id=$_POST['plat_id'];
  $time=formatTime($_POST['time']);
  $cat_id=$_POST['cat_id'];
    
  $insertQuery="INSERT INTO run (user_id, game_id, platform_id, time, valid, category_id) VALUES ($user_id, $game_id, $plat_id,"."'". $time."'".", false, $cat_id);";

  $db->query($insertQuery);

  function getUserID(){
    $idQuery="SELECT id FROM users WHERE username="."'".$_SESSION['uname']."';";
    $db=get_db();

    $statement = $db->query($idQuery);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
   
    return $row['id'];
  }

  function formatTime($time){
    if(strlen($time)=2){
      $time='00:00:'+$time;
    }
    if(strlen($time)=4){
      $time='00:0'+$time;
    }
    if(strlen($time)=5){
      $time='00:'+$time;
    }
    if(strlen($time)=7){
      $time='0'+$time;
    }
  }

  header("Location: userPage.php");
?>