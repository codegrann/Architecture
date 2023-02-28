let close_btn=document.querySelector("#close");
let open_btn=document.querySelector("#open");
var menu=document.querySelector(".menu");
let header=document.querySelector("#header");


// header.style.border="2px solid red";
// header.style.boxShadow="3px 3px 10px black"
close_btn.addEventListener("click", closing);
open_btn.addEventListener("click", opening);

function closing(){
 open_btn.style.display="block";
 close_btn.style.display="none";
 menu.style.display="none";
}

function opening(){
    menu.style.display="flex";
//    links.style.display="block";
    open_btn.style.display="none";
   close_btn.style.display="block";
}

