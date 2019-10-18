<?php
  require "databaseConnect.php";

  $gameID=$_POST['gameID'];
  $db = get_db();

  $gameQuery='SELECT DISTINCT run.category_id, category.category_title FROM run, category WHERE run.category_id = category.id AND run.game_id='.$gameID.';';
  $statement = $db->query($gameQuery);
/*
  $categorys = array();
  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $categorys += $row['category_title'];
  }

  echo json_encode($categorys);*/
?>