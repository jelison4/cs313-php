<?php
    require 'databaseConnect.php';
    $db=get_db();

    $runID=$_POST['runID'];
    $sql="DELETE FROM users WHERE id=$runID;";

    if($db->query($sql)){
        echo "Run deleted.";
    }
    else{
        echo "Error deleting record: " . $db->error;
    }
?>