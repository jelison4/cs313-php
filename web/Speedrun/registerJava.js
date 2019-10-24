function validate(){
    var pass1 = document.getElementById("register").elements[1].value;
    var pass2 = document.getElementById("register").elements[2].value;

    console.log(pass1);
    console.log(pass2);

    if(pass1!=pass2){
        document.getElementById("register").elements[2].statusindicator.value='Passwords do not match.';;
    }
}