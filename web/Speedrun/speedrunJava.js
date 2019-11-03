function generateCatDropdown() {
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

function generateTable(){
    var gameID = document.getElementById('gameSelect').value;
    var catID = document.getElementById('runCategory').value;

    if (catID != 0) {
        var queryString = 'buildTable.php?gameID=' + gameID + '&catID=' + catID;
   
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('runTable').innerHTML = xhr.responseText;
            }
        }
        xhr.open("GET", queryString, true);
        xhr.send();
    }
    else{
        document.getElementById('runTable').innerHTML='';
    }
}

function verifyLogin(){
    var uname=document.getElementById('uname').value;
    var upass=document.getElementById('password').value;

    var loginCorrect=false;
    var queryString = 'login.php?uname=' + uname + '&password=' + upass;
   
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {            
            if(xhr.responseText==1){
                loginCorrect = true;
            }
        }
    }
    xhr.open("GET", queryString, false);
    xhr.send();

    if(loginCorrect){
        document.forms['loginForm'].submit();
    }
    else{
        alert('Login failed.  Please double check your username and password.');
    }
}

function logout(){
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            if(xhr.responseText==1){
                location.reload();
            }
            else{
                console.log("it didn't work")
            }
        }
    }
    xhr.open("get", logout.php, true);
    xhr.send();
}

function removeRun(runID){
    var queryString = 'removeRun.php?runID=' + runID;
    console.log(queryString);
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
        }
    }
    xhr.open("get", queryString, true);
    xhr.send();
}

function validateRun(runID){
    console.log(runID);
}