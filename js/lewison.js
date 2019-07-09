var menuButton = document.getElementById('drop-menu');
var menu = document.getElementById('menu');
var close = document.getElementById("close");
var bar = document.getElementById("bar");

function showMenu(){
    if (menu.style.display === "none"){
        menu.style.display = "flex";
        bar.className = "fas fa-times fa-2x";
    }else{
        menu.style.display = "none";
        bar.className = "fas fa-bars fa-2x";
    }
};

menuButton.addEventListener("click", showMenu);
