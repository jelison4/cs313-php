<?php
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
        $name=$_POST['uname'];
        // Hash password
        $password=$_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Add new user to database
        $query="INSERT INTO users (username, password, admin) VALUES ("."'".$name."'".", '".$hash."', False);";
        $db->query($query);

        echo "Account created";
    }
?>