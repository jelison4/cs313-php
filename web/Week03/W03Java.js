function addToCart(game){
  //Grab quantity from the items page
  var quantityID = game + "Quant"
  var quantity = document.getElementById(quantityID).value;

  //Create query string
  var QString='cart.php?title=' + game + '&quantity=' + quantity;

  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function(){
    if (xhr.readyState==4 && xhr.status==200){
    }
  }
  xhr.open("POST", QString, true);
  xhr.send();
}

function deleteFromCart(title){
  console.log(tile);
}