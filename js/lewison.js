var menuButton = document.getElementById('drop-menu');
var menu = document.getElementById('menu');
var bar = document.getElementById("bar");
var close = document.querySelector('.status')

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

pop = document.querySelector('#popup');
window.onload = function hidePop(){
   pop.style.display = "none";
}

window.setTimeout(function(){
    pop.style.display = "block";
}, 8000);

window.setTimeout(function(){
    if(pop.style.display = "block"){
    pop.style.display = "none";
    }
}, 6000);

function hide(){
    if( pop.style.display = "block"){
        pop.style.display = "none";
    }
}