function databaseWrite() {
    var user_id = document.getElementById('username').value;
    var game_id = document.getElementById('gameSelect').value;
    var plat_id = document.getElementById('platform').value;
    var time = document.getElementById('time').value;
    var cat_id = document.getElementById('runCategory').value;

    var queryString = `insertRun.php?user_id=${user_id}&game_id=${game_id}&plat_id=${plat_id}&time=${time}&cat_id=${cat_id}`;
    console.log(queryString);
    
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {}
        
    }
    xhr.open("POST", queryString, false);
    xhr.send();
}

function generateCatDropdown(){
    var gameID = document.getElementById('gameSelect').value;
    if (gameID != 0) {
        var queryString = 'getCategorys.php?gameID=' + gameID;

        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                categorys = JSON.parse(xhr.responseText);

                var categoryDropdown = null;
                if(document.getElementById('runTable') != null){
                    var categoryDropdown = "<option value=category.id>All</option>";
                }
                
                categorys.forEach(element => {
                    if(categoryDropdown==null){
                        categoryDropdown = "<option value=" + element.id + ">" + element.name + "</option>";
                    }
                    else{
                        categoryDropdown += "<option value=" + element.id + ">" + element.name + "</option>";
                    }
                });

                document.getElementById('runCategory').innerHTML = categoryDropdown;
                generateTable();
            }
        }
        xhr.open("GET", queryString, false);
        xhr.send();
    }
    if (gameID == 0 && document.getElementById('runTable') != null) {
        document.getElementById('runTable').innerHTML='';
        document.getElementById('runCategory').innerHTML = '<option value="0">-</option>';
    }
}