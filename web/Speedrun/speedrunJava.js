function generateCatDropdown(){
    var gameID=document.getElementById('gameSelect').value;
    console.log(gameID);
    var queryString='getCategorys.php?gameID='+gameID;
    console.log(queryString);
/*
    $.ajax({
        url      : queryString
        data     : {ID:$('#ddlClients').val()},
        dataType : 'json',
        type     : 'post',
        success  : function(Result){
                //you can now access data like this:
                //Result.Address_1
            }
        }
    );
*/
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