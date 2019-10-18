/*
function generateDropdown(content){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if (xhr.readyState==4 && xhr.status==200){
            
        }
      }
      xhr.open("GET", , false);
      xhr.send();
}
*/

function toggleCat(){
    if(document.getElementById("gameSelect").value=''){
        document.getElementById('runCategory').classList.add('hidden'); 
    }
    else{
        document.getElementById('runCategory').classList.remove('hidden'); 
    }
}