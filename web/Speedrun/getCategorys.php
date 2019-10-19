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

  $game=1;//$_GET['gameID'];
  $db = get_db();

  $gameQuery='SELECT DISTINCT run.category_id, category.category_title FROM run, category WHERE run.category_id = category.id AND run.game_id='.$game.';';
 
  $statement = $db->query($gameQuery);

  $categorys = null;
  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    $cat=new category($row['category_id'], $row['category_id']);
    
    if($categorys == null){
      $categorys = array($cat);
    }
    else{
      $categorys.array_push($cat);
    }
  }
/*
  $any=new category(2,'Any %');
  $foo=new category(1,'100%');
  $bar=new category(4,'glitchless');
  $categorys = array( $any, $foo, $bar);
*/
  echo json_encode($categorys);
?>