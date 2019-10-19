<?php
  require "databaseConnect.php";

  $game=$_GET['gameID'];
  $db = get_db();

  $gameQuery='SELECT DISTINCT run.category_id, category.category_title FROM run, category WHERE run.category_id = category.id AND run.game_id='.$game.';';
 
  $statement = $db->query($gameQuery);

  $count = 1;
  $categorys = array();
  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $categorys.array_push($row['category_id']=>$row['category_title']);
  }

 //$categorys = array( 2=>'Any %', 1=>'100%', 4=>'glitchless');

  echo json_encode($categorys);
?>