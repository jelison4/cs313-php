<?php
    require 'databaseConnect.php';
    $db=get_db();

    $runID=$_GET['runID'];
    $sql="DELETE FROM users WHERE id=".$runID.";";

    echo $sql;

    //$db->query($sql)
?>