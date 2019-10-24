<?php
  require 'databaseConnect.php';
  $db=get_db();

  $name=$_POST['newName'];
  $password=$_POST['newPass'];

  $query="INSERT INTO users (username, password, admin) VALUES ("."'".$name."'".", '".$password."', False);";

  echo $query;

  $db->query($query);
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Speed Running!!</title>
  <link rel="stylesheet" type="text/css" href="speedrunSS.css">
  <script src="speedrunJava.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        Working title
    </header>

</body>
</html>