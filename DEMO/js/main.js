var username="jackie",password="fun";
var attempt=3;

console.log("Viagra this out java")
function passChecker(){
    var user=document.getElementById("Username").value;
    var pasw=document.getElementById("Password").value;
    if (user==username && pasw==password){
        alert ("Login successfully");
        window.location="MainMenu.html"
        return false;
    }
    
    else{
        attempt--;
        alert("You have left "+attempt+" attempt;");
        if( attempt == 0){
             window.close(0);
            return false;
            }
        document.getElementById("Username").value=null;
        document.getElementById("Password").value=null;
    }

}