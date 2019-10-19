<?php
  require "databaseConnect.php";

  $game=$_POST['gameID'];
  $db = get_db();
/*
  $gameQuery='SELECT DISTINCT run.category_id, category.category_title FROM run, category WHERE run.category_id = category.id AND run.game_id='.$game.';';
  
  $statement = $db->query($gameQuery);

  $count = 1;
  $categorys = null;
  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    if($count==1){
      $categorys = array("'category_".$count"'"=>$row['category_title']);
    }
    else{
      $categorys = array("'category_".$count"'"=>$row['category_title']);
    }
    $count+=1;
  }
*/
  $categorys = array("category_1"=>"Any %","category_2"=>"100%");
  echo json_encode($categorys);
?>