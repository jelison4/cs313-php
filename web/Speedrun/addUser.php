<?php
  require 'databaseConnect.php';
  $db=get_db();

  $name=$_Get['newName'];
  $password=$_GET['password'];

  $query="INSERT INTO users (username, password, admin) VALUES ("."'".$name."'".", '".$password."', False);";

  $db->query($query);
?>