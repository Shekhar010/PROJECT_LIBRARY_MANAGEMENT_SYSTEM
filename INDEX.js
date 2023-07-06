// alert 
alert("ENTER DETAILS CAREFULLY");

// adding functionality for show password checkbox
var password_1 = document.getElementById("password1");
var checkboxClicked = document.getElementById("checkbox1");

checkboxClicked.addEventListener("change", function checkedOrNot() {
    if(checkboxClicked.checked){
        password_1.type = "text";
    } else {
        password_1.type = "password";
    }
    
});