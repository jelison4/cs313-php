function addToCart(game, quantity){
    var QString="cart.php?title=" + game + "&quantity=" + quantity;

    var xhr = new XMLHttpRequest();
    
      xhr.onreadystatechange = function(){
        if (xhr.readyState==4 && xhr.status==200){
        }
    }
    xhr.open("POST", QString, true);
    xhr.send();
}