<?php
  class category{
    public $id;
    public $name;

    public function category($id, $name)
    {
      $this->id = $id;
      $this->name = $name;
    }
  }

  require "databaseConnect.php";

  $game=$_GET['gameID'];
  $db = get_db();

  $gameQuery='SELECT DISTINCT run.category_id, category.category_title FROM run, category WHERE run.category_id = category.id AND run.game_id='.$game.';';
 
  $statement = $db->query($gameQuery);

  $categorys = null;
  $count=0;
  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $cat=new category($row['category_id'], $row['category_title']);

    if($count==0){
      $categorys = array($cat);
      $count=1;
      //$categorys.array_push($cat);
    }
    if($count!=0){
      //$categorys = array($cat);
      $categorys.array_push($cat);
    }
    unset($cat);
  }

  echo json_encode($categorys);
