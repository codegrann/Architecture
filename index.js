let close_btn=document.querySelector("#close");
let open_btn=document.querySelector("#open");
var menu=document.querySelector(".menu");
let header=document.querySelector("#header");
let inputFields=document.querySelectorAll("input")
let btns=document.querySelectorAll(".btn");



// PREVENTING SUBMISSION OF DOCUMENT
btns.forEach((btn)=>{
    // btn.style.color="white";
    btn.addEventListener("click", prevent)
})
function prevent(el){
    el.preventDefault();
}




let inputs=Array.from(inputFields);
// console.log(inputFields);
console.log(inputs)
inputs.forEach(
    (input)=>{
        if(input==invalid){
        input.style.backgroundColor="red";
        }
    }
)





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

