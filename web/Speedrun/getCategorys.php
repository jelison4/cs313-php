<?php
  require "databaseConnect.php";

  $game=$_POST['gameID'];
  $db = get_db();

  $gameQuery='SELECT DISTINCT run.category_id, category.category_title FROM run, category WHERE run.category_id = category.id AND run.game_id='.$game.';';
  
  $statement = $db->query($gameQuery);

  $categorys = null;
  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $categorys += $row['category_title'].' ';
  }

  echo json_encode($categorys);
?>