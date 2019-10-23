function databaseWrite() {
    var user_id = document.getElementById('username').value;
    var game_id = document.getElementById('gameSelect').value;
    var plat_id = document.getElementById('platform').value;
    var time = document.getElementById('time').value;
    var cat_id = document.getElementById('runCategory').value;

    var queryString = `insertRun.php?user_id=${user_id}&game_id=${game_id}&plat_id=${plat_id}&time=${time}&cat_id=${cat_id}`;
    console.log(queryString);
    /*
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {}
        
    }
    xhr.open("GET", queryString, false);
    xhr.send();
    */
}