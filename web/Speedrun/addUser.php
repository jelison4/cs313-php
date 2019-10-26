<?php
    session_start();

    require 'databaseConnect.php';
    $db=get_db();
  
    $name=$_POST['uname'];
    $password=$_POST['password'];

    $infoQuery="SELECT * FROM users WHERE username='".$name."';";
    $statement = $db->query($infoQuery);
   
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    if(password_verify($password, $row['password'])){
        $user_id=$row['id'];
    }
    else{
        echo "Login Failed";
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

    <div class=background><?php addUser();?></div>

</body>
</html>