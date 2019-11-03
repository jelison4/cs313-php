<?php
    session_start();

    require 'databaseConnect.php';
    $db=get_db();
  
    $name=$_POST['uname'];
    $password=$_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $newUser="INSERT INTO users (username, password, admin) VALUES ('$name', '$hash', FALSE);";
    $db->query($newUser);

    header("Location: home.php");
?>
