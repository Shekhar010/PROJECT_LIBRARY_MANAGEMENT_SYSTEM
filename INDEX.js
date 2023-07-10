// alert 
// alert("ENTER DETAILS CAREFULLY");

// adding functionality for show password checkbox
var password_1 = document.getElementById("password1");
var checkboxClicked = document.getElementById("eye");

checkboxClicked.addEventListener("change", function clickedOrNot() {
    if(checkboxClicked.clicked){
        password_1.type = "text";
    } else {
        password_1.type = "password";
    }
    
});