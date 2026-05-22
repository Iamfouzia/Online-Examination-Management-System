function validate()
{
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var pwd = document.getElementById("pwd").value;
    if(name==""){
        alert("Please enter your name");
        return false;
    }
    else if(email==""){
        alert("Please enter your email");
        return false;
    }
    else if(pwd==""){
        alert("Please enter your password");
        return false;
    }
    else{
        return true;
    }
}