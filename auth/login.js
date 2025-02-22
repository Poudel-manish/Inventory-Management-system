let eyeicon=document.getElementById("togglePassword");
    let password=document.getElementById("password");
    eyeicon.onclick=function(){
        if(password.type == "password"){
            password.type="text";
            eyeicon.classList.add("fa-eye-slash");
            eyeicon.classList.remove("fa-eye");
        }
        else{
        password.type="password";
        eyeicon.classList.add("fa-eye");
        eyeicon.classList.remove("fa-eye-slash");
        }
    }
let loginForm = document.getElementsByClassName("login-form")[0];

loginForm.addEventListener("submit", function(event) {
    event.preventDefault();

let username = document.getElementById("username").value.trim();
   let password = document.getElementById("password").value.trim(); 

    if (username === "" && password === "") {
        alert("Please enter both username and password.")
        return false;
    }
    if (username === "")
    {
        alert("Please enter your username !")
        return false;
    }
    if(password === "")
    {
        alert("Please enter your password")
        return false;
    }
    
   
    
});
