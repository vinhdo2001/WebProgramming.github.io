let form = document.getElementById('form-contact')
let fname = document.getElementById('fname')
let email = document.getElementById('email')
let method1 = document.getElementById('method1')
let method2 = document.getElementById('method2')
let message = document.getElementById('message')
let charNum = document.getElementById('charNum')
let phone = document.getElementById('phone')
let day7 = document.getElementById('day2')
let day6 = document.getElementById('day3')
let day5 = document.getElementById('day4')
let day4 = document.getElementById('day5')
let day3 = document.getElementById('day6')
let day2 = document.getElementById('day7')
let day1 = document.getElementById('day1')


function validateInput(){
    if(fname.value.trim() === ""){
        errorMessage(fname, "   Name cannot be blank");
    }
    else if(fname.value.length < 3){
        errorMessage(fname, "First name must be at least 3 characters");
    }
    else{
        successMessage(fname);
    }
    if(email.value.trim() === ""){
        errorMessage(email, "Email cannot be blank");
    }
    else if(!isEmail(email.value)){
        errorMessage(email, "Email invalid")
    }
    else{
        successMessage(email);
    }
    if(!method1.checked && !method2.checked){
        errorMessage(method2, 'One method must be checked')
   
    }
    else{
        successMessage(method2)
    }
    if(!day1.checked && !day2.checked && !day3.checked && !day4.checked && !day5.checked && !day6.checked && !day7.checked){
        errorMessage(day1, 'At least one day must be checked')
    }
    else{
        successMessage(day1)
    }
    if(phone.value.trim() === ""){
        errorMessage(phone, "Phone cannot be blank");
      }
    else if(!isPhone(phone.value)){
        errorMessage(phone, "Phone number invalid")
      }
    else{
        successMessage(phone);
    }

}



function errorMessage(input, message){
    let parent = input.parentElement;
    let errorMessage = parent.querySelector("small");
    errorMessage.style.visibility="visible";
    errorMessage.innerText=message;
}

function successMessage(input){
    let parent = input.parentElement;
    let errorMessage = parent.querySelector("small");
    errorMessage.style.visibility="hidden";
    errorMessage.innerText="";
}

function countChars(obj){
    var minLength = 50;
    var maxLength = 500;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    var charNeed = (minLength - strLength);
    if(strLength < minLength){
        charNum.innerHTML = '<span style="color:red";>'+charNeed+' more characters are needed</span>';
    } 
    else if(strLength > maxLength){
        charNum.innerHTML = '<span style="color:red";>Deleting '+(strLength-maxLength)+' characters is needed.</span>';

    }
    else{
        charNum.innerHTML = 'You can type '+(charRemain)+ ' more characters';
    }
}

function isEmail(email){
    return /^(?!\.)(?!.*\.$)(?!.*?\.\.)^([a-zA-Z\d\-.]+)@([a-zA-Z\d\-.]+)\.([a-zA-Z]{2,5})$/.test(email)
}
function isPhone(phone) {
    return /^\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?[\d{1}]?[-\s\.]?[\d{1}]?$/.test(phone);
  }

form.addEventListener("submit", (e) =>{
    e.preventDefault();

    validateInput()
})

