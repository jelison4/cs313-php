<?php
    require 'databaseConnect.php';
    $db=get_db();

    $runID=$_GET['runID'];
    $sql="UPDATE run SET valid='true' WHERE id="."'".$runID."'".";";

    $db->query($sql);
    header("Location: userPage.php");
?>