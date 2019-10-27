<?php
  require 'databaseConnect.php';

  $db=get_db();

  $user_id=getUserID();
  $game_id=$_POST['game_id'];
  $plat_id=$_POST['plat_id'];
  $time=$_POST['time'];
  $cat_id=$_POST['cat_id'];

  $query="INSERT INTO run (user_id, game_id, platform_id, time, valid, category_id) VALUES ($user_id, $game_id, $plat_id, $time, 0, $cat_id);";

  $status=$db->query($query);

  if($status){
    echo "Update sucessfull.";
  }
  else{
    echo "Something got fucked up.";
  }

  function getUserID(){
    $idQuery="SELECT id FROM users WHERE username="."'".$_SESSION['uname']."';";
    $db=get_db();

    $statement = $db->query($idQuery);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    
    return $row['id'];
  }
?>