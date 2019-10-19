function generateCatDropdown(){
    var gameID=document.getElementById('gameSelect').value;
    console.log(gameID);
    
    
        var queryString='getCategorys.php?gameID='+gameID;
        console.log(queryString);

        var gameID=document.getElementById('gameSelect').value;
        console.log(gameID);
        var queryString='getCategorys.php?gameID='+gameID;
        console.log(queryString);
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function(){
            if (xhr.readyState==4 && xhr.status==200){
                categorys = JSON.parse(xhr.responseText);
                console.log(categorys);
//'runCategory'
                var categoryDropdown = '<option value=''>Select a Category</option>';
                categorys.forEach(element => {
                    categoryDropdown +="<option value=" + element.id  + ">" + element.name + "</option>";
                });
                console.log(categoryDropdown);

                document.getElementById('runCategory').innerHTML = categoryDropdown;
            }
        }
        xhr.open("GET", queryString, false);
        xhr.send();
    
}