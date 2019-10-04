<?php
  session_start();
  $_SESSION['address']=$_POST["address"];
  $_SESSION["city"]=$_POST["city"];
  $_SESSION["State"]=$_POST["State"];
  $_SESSION["zip"]=$_POST["zip"];
?>