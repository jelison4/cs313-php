function generateCatDropdown() {
    var gameID = document.getElementById('gameSelect').value;
    if (gameID != 0) {
        var queryString = 'getCategorys.php?gameID=' + gameID;

        var gameID = document.getElementById('gameSelect').value;

        var queryString = 'getCategorys.php?gameID=' + gameID;

        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                categorys = JSON.parse(xhr.responseText);
                console.log(categorys);

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