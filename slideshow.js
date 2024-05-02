var i = 0;
var img = ["slide1.png",  "slide2.png", "slide3.png", "slide4.png", "slide5.png", "slide6.png"];
slider();
function slider()
{
    document.querySelector(".slideshow").src = "slide1.png" +  img[i];
    i ++;
    if(i == img.length){
        i = 0;
    }
    setTimeout(slider, 2000);
}