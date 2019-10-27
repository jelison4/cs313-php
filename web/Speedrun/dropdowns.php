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
    $statement = $db->query('SELECT * FROM platform;');

    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        echo "<option value=" . $row['id']  . ">" . $row['name'] . "</option>";
    }
}
?>