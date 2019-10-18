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
    console.log('Does this work?');
    if(document.getElementById('gameSelect').value='0'){
        document.getElementById('runCategory').classList.add('hidden'); 
        console.log("Zero");
    }
    else{
        document.getElementById('runCategory').classList.remove('hidden');
        console.log("it should be showing"); 
    }
}