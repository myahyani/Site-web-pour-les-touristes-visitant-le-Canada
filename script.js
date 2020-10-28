window.onscroll = function() {stickNav()};
        
var header = document.getElementById("header");
var sticky = header.offsetTop;

function stickNav() {
    if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    document.getElementById("info").style.marginTop = "45px"; 
    } else {
    header.classList.remove("sticky");
    document.getElementById("info").style.marginTop = "0"; 
    }
}