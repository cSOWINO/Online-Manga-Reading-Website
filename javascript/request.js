document.getElementById("requestButton").addEventListener("click", function(){
    var manga = document.getElementById("manga").value;
    var rule1 = /(?!^ +$)^.+$/;
    var url = document.getElementById("url").value;
    var rule2 = /^((ftp|http|https):\/\/)[^ ]+$/;

    if(rule1.test(manga) && rule2.test(url) == true){
        document.querySelector(".form").submit();
    }

    else{

        if(rule1.test(manga)){
            document.getElementById("mangaSpan").style.color = "green";
            document.getElementById("mangaSpan").innerHTML = "Lookin' Good!";
        }
    
        else if(manga.length == 0){
            document.getElementById("mangaSpan").style.color = "blue";
            document.getElementById("mangaSpan").innerHTML = "It's Empty!";
        }
            
        else{
            document.getElementById("mangaSpan").style.color = "red";
            document.getElementById("mangaSpan").innerHTML = "Invalid Input!";
        }
    


        
        if(rule2.test(url)){
            document.getElementById("urlSpan").style.color = "green";
            document.getElementById("urlSpan").innerHTML = "Lookin' Good!";
        }
    
        else if(url == 0){
            document.getElementById("urlSpan").style.color = "blue";
            document.getElementById("urlSpan").innerHTML = "It's Empty!";
        }
            
        else{
            document.getElementById("urlSpan").style.color = "red";
            document.getElementById("urlSpan").innerHTML = "Invalid Input!";
        }
    }
})
    