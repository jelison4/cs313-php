<?php
  $user_id=$_GET['user_id'];
  $game_id=$_GET['game_id'];
  $plat_id=$_GET['plat_id'];
  $time=$_GET['time'];
  $cat_id=$_GET['cat_id'];

  $query="INSERT INTO run (user_id, game_id, platform_id, time, valid, category_id) VALUES ($user_id, $game_id, $plat_id, $time, 0, $cat_id);";

?>