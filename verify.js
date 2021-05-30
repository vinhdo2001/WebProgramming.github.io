let fname = document.getElementById('fname')
let lname = document.getElementById('lname')
let form = document.getElementById('form-register')
let phone = document.getElementById('phone')
let password = document.getElementById('password')
let conpassword = document.getElementById('conpassword')
let address = document.getElementById('address')
let city = document.getElementById('city')
let email = document.getElementById('email')
let zipcode = document.getElementById('zipcode')

function validateInput() {
  let invalid = false;
    if(fname.value.trim() === ""){
      errorMessage(fname, "First name cannot be blank");
      invalid = true;
    }
    else if(fname.value.length < 3){
      errorMessage(fname, "First name must be at least 3 characters");
      invalid = true;
    }
    else{
        successMessage(fname);
    }
    if(lname.value.trim() === ""){
      errorMessage(lname, "Last name cannot be blank");
      invalid = true;
    }
    else if(lname.value.length < 3){
      errorMessage(lname, "Last name must be at least 3 characters");
      invalid = true;
    }
    else{
        successMessage(lname);
    }
    if(address.value.trim() === ""){
      errorMessage(address, "Address cannot be blank");
      invalid = true;
    }
    else if(address.value.length < 3){
      errorMessage(address, "Address must be at least 3 characters");
      invalid = true;
    }
    else{
        successMessage(address);
    }
    if(city.value.trim() === ""){
      errorMessage(city, "City cannot be blank");
      invalid = true;
    }
    else if(city.value.length < 3){
      errorMessage(city, "City must be at least 3 characters");
      invalid = true;
    }
    else{
        successMessage(city);
    }
    if(email.value.trim() === ""){
      errorMessage(email, "Email cannot be blank");
      invalid = true;
    }
    else if(!isEmail(email.value)){
      errorMessage(email, "Email invalid");
      invalid = true;
    }
    else{
        successMessage(email);
    }
    if(password.value.trim() === ""){
      errorMessage(password, "Password cannot be blank");
      invalid = true;
    }
    else if (password.value.length < 8 || password.value.length > 20) {
      errorMessage(password, "Password must contains from 8 to 20 letters");
      invalid = true;
      }
    else if (!containsLower(password.value)) {
      errorMessage(password, "Password must contains at least one lower case letter");
      invalid = true;
      }
    else if (!containsUpper(password.value)) {
      errorMessage(password, "Password must contains at least one upper case letter");
      invalid = true;
      }
    else if (!containsDigit(password.value)) {
      errorMessage(password, "Password must contains at least one digit");
      invalid = true;
      }
    else if (!containsSpecial(password.value)) {
      errorMessage(password, "Password must contains at least one special letter in !@#$%^&");
      invalid = true;
      }
    else if (password.value.indexOf(' ') >= 0) {
        errorMessage(password, "Password must contains no space");
        invalid = true;
    }
    else{
        successMessage(password);
    }
    if(conpassword.value.trim() === ""){
      errorMessage(conpassword, "Password does not match");
      invalid = true;
    }
    else if(password.value.trim() != conpassword.value.trim()){
      errorMessage(conpassword, "Password does not match");
      invalid = true;
    }
    else{
        successMessage(conpassword);
    }
    if(zipcode.value.trim() === ""){
      errorMessage(zipcode, "Zipcode cannot be blank");
      invalid = true;
    }
    else if (zipcode.value.length < 4 || zipcode.value.length > 6) {
      errorMessage(zipcode, "Zipcode must be between 4 - 6 digits");
      invalid = true;
    }
    else {
        successMessage(zipcode)
    }
    if(phone.value.trim() === ""){
      errorMessage(phone, "Phone cannot be blank");
      invalid = true;
    }
    else if(!isPhone(phone.value)){
      errorMessage(phone, "Phone number invalid");
      invalid = true;
    }
    else{
        successMessage(phone);
    }
    if(!storeowner.checked && !shopper.checked){
      errorMessage(storeowner, "You must choose one account type");
      invalid = true;
    }
    else{
      successMessage(storeowner);
    }

  return !invalid;
}
function isEmail(email){
    return /^(?!\.)(?!.*\.$)(?!.*?\.\.)^([a-zA-Z\d\-.]+)@([a-zA-Z\d\-.]+)\.([a-zA-Z]{2,5})$/.test(email)
}


function errorMessage(input, message){
    let parent = input.parentElement;
    let errorMessage = parent.querySelector("small");
    errorMessage.style.visibility="visible";
    errorMessage.innerText = message;
}

function successMessage(input){
    let parent = input.parentElement;
    let errorMessage = parent.querySelector("small");
    errorMessage.style.visibility="hidden";
  errorMessage.innerText = "";
}

function containsLower(str) {
    lowers = 'abcdefghijklmnopqrstuvwxyz';
    for (let letter of str) {
      if (lowers.indexOf(letter) >= 0) {
        return true;
      }
    }
    return false;
  }

  function containsUpper(str) {
    uppers = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    for (let letter of str) {
      if (uppers.indexOf(letter) >= 0) {
        return true;
      }
    }
    return false;
  }

  function containsDigit(str) {
    digits = '01234567689';
    for (let letter of str) {
      if (digits.indexOf(letter) >= 0) {
        return true;
      }
    }
    return false;
  }

  function containsSpecial(str) {
    specials = '!@#$%^&';
    for (let letter of str) {
      if (specials.indexOf(letter) >= 0) {
        return true;
      }
    }
    return false;
  }

  /*code password verification snippets taken from answers in week 8*/
  function optionCheck() {
    if (document.getElementById('storeowner').checked) {
        document.getElementById('owneroption').style.visibility = 'visible';
    }
    else document.getElementById('owneroption').style.visibility = 'hidden';

}

function isPhone(phone) {
  return /^\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?[\d{1}]?[-\s\.]?[\d{1}]?$/.test(phone);
}

// form.addEventListener("submit", e => {
//   e.preventDefault();
//   if (validateInput()) {
//     alert("Helloo!");
//     form.submit();
//   }
// });
