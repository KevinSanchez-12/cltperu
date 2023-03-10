function mostrarMenu(){
    var menu = document.getElementById("menu");
    menu.style.right = "0";
}
function cerrarMenu(){
    var menu = document.getElementById("menu");
    menu.style.right = "-100%";
    menu.style.transition = "right .4s";
}