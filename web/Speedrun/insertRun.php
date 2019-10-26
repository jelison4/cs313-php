<?php
  require 'databaseConnect.php';

  $user_id=$_POST['user_id'];
  $game_id=$_POST['game_id'];
  $plat_id=$_POST['plat_id'];
  $time=$_POST['time'];
  $cat_id=$_POST['cat_id'];

  $query="INSERT INTO run (user_id, game_id, platform_id, time, valid, category_id) VALUES ($user_id, $game_id, $plat_id, $time, 0, $cat_id);";

  $db=get_db();

  $db->query($query);
?>