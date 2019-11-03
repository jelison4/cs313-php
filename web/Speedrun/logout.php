<?php 
 session_start();
 //header("Location: home.php");
 unset($_SESSION['username']);
 die();
?>