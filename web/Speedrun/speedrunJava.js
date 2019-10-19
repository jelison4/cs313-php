function generateCatDropdown() {
    var gameID = document.getElementById('gameSelect').value;
    if (gameID != 0) {
        var queryString = 'getCategorys.php?gameID=' + gameID;

        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                categorys = JSON.parse(xhr.responseText);

                var categoryDropdown = '<option value="0">Select a Category</option>';
                categorys.forEach(element => {
                    categoryDropdown += "<option value=" + element.id + ">" + element.name + "</option>";
                });

                document.getElementById('runCategory').innerHTML = categoryDropdown;
            }
        }
        xhr.open("GET", queryString, false);
        xhr.send();
    }
    if (gameID == 0) {
        document.getElementById('runCategory').innerHTML = '<option value="0">Select a Category</option>';
    }
}

function generateTable(){
    var gameID = document.getElementById('gameSelect').value;
    var catID = document.getElementById('runCategory').value;
    
    if (catID != 0) {
        var queryString = 'buildTable.php?gameID=' + gameID + '&catID=' + catID;
   
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                
            }
        }
        xhr.open("GET", queryString, false);
        xhr.send();
    }
    //'SELECT DISTINCT users.username, run.time, platform.name, run.valid FROM users, run, platform, category WHERE run.user_id = users.id AND platform_id = platform.id AND run.game_id = 1 AND run.category_id = 2 ORDER BY run.time;'
}