function generateCatDropdown(){

    var gameID=document.getElementById('gameSelect').value;
    console.log(gameID);
    var queryString='getCategorys.php?gameID='+gameID;
    console.log(queryString);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if (xhr.readyState==4 && xhr.status==200){
            categorys = JSON.parse(xhr.responseText);
            console.log(categorys);
        }
      }
      xhr.open("GET", queryString, false);
      xhr.send();
}