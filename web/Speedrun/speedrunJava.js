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

function hideCat(){
    if(!document.getElementById('runCategory').classList.contains('hidden')){
        document.getElementById('runCategory').classList.add('hidden'); 
    }
}

function showCat(){
    if(document.getElementById('runCategory').classList.contains('hidden')){
        document.getElementById('runCategory').classList.remove('hidden'); 
    }
}