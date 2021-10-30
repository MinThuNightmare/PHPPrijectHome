let menuJs = document.querySelector(".menu_js");
let boxLeft = document.querySelector(".bx_js_left");
let boxRight = document.querySelector(".bx_js_right");
let navBar = document.querySelector(".navbar");



menuJs.addEventListener("click",()=>{
    console.log("fine")
    navBar.classList.toggle("change_menu");
    if(navBar.classList.contains("change_menu")){
        boxRight.classList.replace("bx-menu-alt-right", "bx-menu-alt-left") 
     }else{
        boxRight.classList.replace("bx-menu-alt-left", "bx-menu-alt-right") 

     }
})