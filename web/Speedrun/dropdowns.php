<?php

function generateGameDropdown(){
    require 'databaseConnect.php';
    $db = get_db();
    //$gameQuery='SELECT DISTINCT run.game_id, game.title FROM run, game WHERE run.game_id = game.id ORDER BY game.title;';
    $statement = $db->query('SELECT DISTINCT run.game_id, game.title FROM run, game WHERE run.game_id = game.id ORDER BY game.title;');

    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        echo "<option value=" . $row['game_id']  . ">" . $row['title'] . "</option>";
    }
}
/*
function generateCategoryDropdown(){
    require 'databaseConnect.php';
    $db = get_db();
    $gameQuery='SELECT DISTINCT run.game_id, game.title FROM run, game WHERE run.game_id = game.id ORDER BY game.title;';
    $statement = $db->query($gameQuery);

    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        echo "<option value=" . $row['game_id']  . ">" . $row['title'] . "</option>";
    }
}
*/
function generatePlatformDropdown(){
    require 'databaseConnect.php';
    $db = get_db();
    //$platformQuery='SELECT * FROM platform;';
    $platStatement = $db->query('SELECT * FROM platform;');

    while ($platRow = $platStatement->fetch(PDO::FETCH_ASSOC)){
        echo "<option value=" . $platRow['id']  . ">" . $platRow['name'] . "</option>";
    }
}
?>