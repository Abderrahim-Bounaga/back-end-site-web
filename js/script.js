const close = document.querySelector('#closee');
const myModal=document.querySelector('#myModal');
const myModal2=document.querySelector('#myModal2');
const myModal3=document.querySelector('#myModal3');
const fade=document.querySelector('.fade');
const modal=document.querySelector('.modal');
// const input=document.querySelector('#inpute');
// const singup=document.querySelector('.singup');
// const para=document.querySelector('.para');
// const create=document.querySelector('#create');
// const forme=document.querySelector('.forme');
// const con1=document.querySelector('.con1');

function buttonClick(){

    myModal.style.display = "block";
    fade.style.opacity = 1 ;
    close.addEventListener("click", click);
};
function click(){

    myModal.style.display = "none";
    fade.style.opacity = 0 ;
    modal.style.opacity = 0 ;
   

};
// singup.addEventListener("click", function(){
//     if(input == ""){
//         para.innerHTML="errore"
//     }


// })





// create.addEventListener("click", function(){
//     con1.style.display="block";
//     if(create == false){
//         con1.style.display="block";
//     }
// });
