document.getElementById("loginButton").addEventListener("click", function(){
    var username = document.getElementById("username").value;
    var rule1 = /^[a-zA-Z0-9][a-zA-Z0-9-_.]{5,14}$/;
    var password = document.getElementById("password").value;
    var rule2 = /^[a-zA-Z0-9]{6,18}$/;

    if(rule1.test(username) && rule2.test(password) == true){
        document.querySelector(".form").submit();
    }

    else{

        if(rule1.test(username)){
            document.getElementById("usernameSpan").style.color = "green";
            document.getElementById("usernameSpan").innerHTML = "Lookin' Good!";
        }
    
        else if(username.length == 0){
            document.getElementById("usernameSpan").style.color = "blue";
            document.getElementById("usernameSpan").innerHTML = "It's Empty!";
        }
            
        else{
            document.getElementById("usernameSpan").style.color = "red";
            document.getElementById("usernameSpan").innerHTML = "Invalid Input!";
        }
    


        
        if(rule2.test(password)){
            document.getElementById("passwordSpan").style.color = "green";
            document.getElementById("passwordSpan").innerHTML = "Lookin' Good!";
        }
    
        else if(password.length == 0){
            document.getElementById("passwordSpan").style.color = "blue";
            document.getElementById("passwordSpan").innerHTML = "It's Empty!";
        }
            
        else{
            document.getElementById("passwordSpan").style.color = "red";
            document.getElementById("passwordSpan").innerHTML = "Invalid Input!";
        }
    }
})
    