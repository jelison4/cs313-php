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
  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $cat=new category($row['category_id'], $row['category_title']);

    if(!empty($categorys)){
      //$categorys = array($cat);
      $categorys.array_push($cat);
    }
    else{
      $categorys = array($cat);
      //$categorys.array_push($cat);
    }
  }

  echo json_encode($categorys);
?>