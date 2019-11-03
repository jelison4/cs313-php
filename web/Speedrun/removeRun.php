<?php
    require 'databaseConnect.php';
    $db=get_db();

    $runID=$_GET['runID'];
    $sql="DELETE FROM run WHERE id=".$runID.";";

    if ($db->query($sql) === TRUE) {
        echo "Record deleted successfully";
    }
    else{
        echo "Error deleting record" . $db->error;
    }
?>