var menuButton = document.getElementById('drop-menu');
var menu = document.getElementById('menu');

function showMenu(){
    if (menu.style.display === "none"){
        menu.style.display = "flex";
    }else{
        menu.style.display = "none";
    }
};

menuButton.addEventListener("click", showMenu);
//menuButton.addEventListener("click", hideMenu);