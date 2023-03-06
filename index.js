let close_btn=document.querySelector("#close");
let open_btn=document.querySelector("#open");
var menu=document.querySelector(".menu");
let header=document.querySelector("#header");
let inputFields=document.querySelectorAll("input")
let btns=document.querySelectorAll(".btn");
let textarea=document.querySelector("#mssg");


// FUNCTIONS TO TOGGLE NAVIGATION MENU
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



// PREVENTING SUBMISSION OF DOCUMENT
btns.forEach((btn)=>{
    // btn.style.color="white";
    btn.addEventListener("click", prevent)
})
function prevent(el){
    el.preventDefault();
}



// VALIDATION OF FORM
let inputs=Array.from(inputFields);
// console.log(inputFields);
console.log(inputs)
// textarea.addEventListener("input", invalid);
inputs.forEach(
    (input)=>{
        input.addEventListener("input", invalid);
        input.addEventListener("change", invalid);
        input.addEventListener("focus", invalid);
        function invalid(){
            if(input.value.length<=5){
                input.style.backgroundColor=" rgb(190, 146, 146)";
                // input.style.borderColor="red";
                }
            else{
                input.style.backgroundColor="white";
                input.style.border="none";
                }
        }
       
    }
)





