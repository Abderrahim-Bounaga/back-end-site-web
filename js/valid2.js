const formm = document.getElementById('forme');
const email = document.getElementById('email');
const password = document.getElementById('password');



formm.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();


})
function checkInputs(){

    const evalue = email.value.trim();
    const pavalue= password.value.trim();

   
    if(evalue === ''){
        
        setErrorFor(email, 'Email cannot be blank')

    }else if(!isEmail(evalue)){

        setErrorFor(email, 'Email is not valid')

    }else{
        setSuccessFor(email); 
    }
    
    if(pavalue === ''){
        
        setErrorFor(password, 'Password cannot be blank');
    }else if(  pavalue.length < 6){
        setErrorFor(password, 'password is small');


    }else{
        setSuccessFor(password); 
    }
    
}

function setErrorFor(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    small.innerText = message;

    formControl.className = 'form3-control errore';
}
function setSuccessFor(input){
    const formControl = input.parentElement;
    formControl.className ='form3-control successe';

}
function isEmail(email){
    var strongRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return strongRegex.test(email);
}
