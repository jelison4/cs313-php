<?php 
    session_start();

    $name=$_GET['uname'];
    $password=$_GET['password'];
    $passQuery=$db->query("SELECT password FROM users WHERE username='".$name."'".";");
    $hashPass=$passQuery->fetch(PDO::FETCH_ASSOC);

    if(password_verify($password, $hashPass['password'])){
        $_SESSION['uname'] = $name;
        echo 1;   
    }
?>