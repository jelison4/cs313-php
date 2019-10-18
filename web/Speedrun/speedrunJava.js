function generateDropdown(content){

    var gameID=document.getElementById('gameSelect').value;
    var queryString='getCategorys.php?gameID='+gameID;

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