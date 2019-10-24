<?php
  function addUser(){
    require 'databaseConnect.php';
    $db=get_db();
  
    $name=$_POST['uname'];
    $nameTaken=FALSE;

    $nameQuery='SELECT username FROM users;';
    $statement = $db->query($nameQuery);
   
    // Check if the desired username is already taken
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        if($row['username']== $name){
            $nameTaken=TRUE;
        } 
    }
    
    // Let the user know if the name is taken
    if($nameTaken){
        echo "Sorry that username is taken.";
    }
    else{
        // Hash password
        $password=$_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Write user to database
        $query="INSERT INTO users (username, password, admin) VALUES ("."'".$name."'".", '".$hash."', False);";
        $db->query($query);
    }
  }
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
        <h1>Working title</h2>
    </header>

    <div class=background><?php addUser(); ?></div>
    
</body>
</html>