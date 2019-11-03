<?php
    require 'databaseConnect.php';
    $db=get_db();

    $runID=$_GET['runID'];
    $sql="DELETE FROM users WHERE id=".$runID.";";

    echo $sql;

    if($db->query($sql)){
        echo "Run deleted.";
    }
    else{
        echo "Error deleting record: " . $db->error;
    }
?>