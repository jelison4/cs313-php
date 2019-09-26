<?php 
function getTime(){
    $currentTime=date_default_timezone_set('America/Boise');

    $currentTime = date('H:i:s');
    echo $currentTime;
}  
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Josh Elison's Homepage</title>
  <link rel="stylesheet" type="text/css" href="homepageSS.css">
  <script src="homepageJava.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>
        Josh Elison
    </h1>
    <div class="navbar">
        <a>Home</a>
        <a href="assignments.html">Assignments</a>
        <a href="intro.html">About Me</a>
        <a href="https://github.com/jelison4/cs313-php">My GitHub Page for CS313</a>
    </div>
    
    <p>
        <?php getTime(); ?>
    </p>

</body>
</html>