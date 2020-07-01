const formm = document.getElementById('forme');
const firstname = document.getElementById('firstname');
const lastname = document.getElementById('lastname');
const email = document.getElementById('email');
const phonenumber = document.getElementById('phonenumber');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');


formm.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();


})
function checkInputs(){
    const fvalue = firstname.value.trim();
    const lvalue = lastname.value.trim();
    const evalue = email.value.trim();
    const phvalue= phonenumber.value.trim();
    const pavalue= password.value.trim();
    const paavalue= password2.value.trim();

    if(fvalue === ''){
        
        setErrorFor(firstname, 'firstname cannot be blank')
    }else{
        setSuccessFor(firstname); 
    }
    if(lvalue === ''){
        
        setErrorFor(lastname, 'lastname cannot be blank')
    }else{
        setSuccessFor(lastname); 
    }
    if(evalue === ''){
        
        setErrorFor(email, 'Email cannot be blank')

    }else if(!isEmail(evalue)){

        setErrorFor(email, 'Email is not valid')

    }else{
        setSuccessFor(email); 
    }
    if(phvalue === ''){
        
        setErrorFor(phonenumber, 'Phone number cannot be blank');
    }
    else if(  phvalue.length < 10){
            setErrorFor(phonenumber, 'phonenumber is small');
    
    
    }else{
        setSuccessFor(phonenumber); 
    }
    if(pavalue === ''){
        
        setErrorFor(password, 'Password cannot be blank');
    }else if(  pavalue.length < 6){
        setErrorFor(password, 'password is small');


    }else{
        setSuccessFor(password); 
    }
    if(paavalue === ''){
        
        setErrorFor(password2, 'Password2 cannot be blank');
    }else if(pavalue !== paavalue){
        setErrorFor(password2, 'Password2 deos not motch');


    }else{
        setSuccessFor(password2); 
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


