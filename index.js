let close_btn=document.querySelector("#close");
let open_btn=document.querySelector("#open");
var menu=document.querySelector(".menu");
let links=document.querySelectorAll(".linked_list")
// let close_btn=document.querySelector("#close");

menu.style.backgroundColor="white";
// menu.style.display="none"
close.addEventListener("click", closing);
open.addEventListener("click", opening);

function closing(){

}

function opening(){
    menu.style.display="block";
   links.style.display="block";
   close.style.display="inline";
}

