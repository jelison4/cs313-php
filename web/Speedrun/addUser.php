<?php
  require 'databaseConnect.php';
  $db=get_db();

  $name=$_POST['uname'];
  $password=$_POST['password'];
  $hash = password_hash($password, PASSWORD_DEFAULT);

  $query="INSERT INTO users (username, password, admin) VALUES ("."'".$name."'".", '".$hash."', False);";

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
        <h2>Working title</h2>
    </header>

</body>
</html>