//Validation script

let fname = document.querySelector("#fname");
let lname = document.querySelector("#lname");
let email = document.querySelector("#email");
let phone = document.querySelector("#phone");
let country = document.querySelector("#country");
let course = document.querySelector("#course");
let password = document.querySelector("#pwd");
let myform = document.querySelector("#custom-form");

console.log(course);
//messages to be displayed once an error occurs
let message1 = document.createElement("small");
let message2 = document.createElement("small");
let message3 = document.createElement("small");
let message4 = document.createElement("small");
let message5 = document.createElement("small");
let message6 = document.createElement("small");

let reg;
//validate first name
function validateFName() {
  reg = /^[a-zA-Z]+$/;
  let fnameVal = fname.value;

  if (!reg.test(fnameVal)) {
    fname.classList.add("border", "border-danger");
    message1.innerHTML = "Please insert a valid firstname";
    fname.after(message1);
    return false;
  } else {
    fname.classList.remove("border", "border-danger");
    message1.remove();
    return true;
  }
}
//validate last name
function validateLName() {
  reg = /^[a-zA-Z]+$/;
  let lnameVal = lname.value;

  if (!reg.test(lnameVal)) {
    lname.classList.add("border", "border-danger");
    message2.innerHTML = "Please insert a valid lastname";
    lname.after(message2);
    return false;
  } else {
    lname.classList.remove("border", "border-danger");
    message2.remove();
    return true;
  }
}

//Validate email
function validateEmail() {
  reg =
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  let emailVal = email.value;
  if (!reg.test(String(emailVal).toLowerCase())) {
    email.classList.add("border", "border-danger");
    message3.innerHTML = "Please insert a valid email";
    email.after(message3);
    return false;
  } else {
    email.classList.remove("border", "border-danger");
    message3.remove();
    return true;
  }
}
//valoidate course
function validateCourse() {
  reg = /^[a-zA-Z]+$/;
  let courseVal = course.value;

  if (!reg.test(courseVal)) {
    course.classList.add("border", "border-danger");
    message4.innerHTML = "Please insert a valid course";
    course.after(message4);
    return false;
  } else {
    course.classList.remove("border", "border-danger");
    message4.remove();
    return true;
  }
}

//validate phone number
function validatePhone() {
  reg = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
  let phoneVal = phone.value;

  if (!reg.test(phoneVal)) {
    phone.classList.add("border", "border-danger");
    message5.innerHTML = "Please insert a valid phone";
    phone.after(message5);
    return false;
  } else {
    phone.classList.remove("border", "border-danger");
    message5.remove();
    return true;
  }
}

//validate password
function validatePassword() {
  reg = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
  let passVal = password.value;

  if (!reg.test(passVal)) {
    password.classList.add("border", "border-danger");
    message6.innerHTML = "Please insert a valid password";
    password.after(message6);
    return false;
  } else {
    password.classList.remove("border", "border-danger");
    message6.remove();
    return true;
  }
}

//submit function
function submitForm(e) {
  if (validateFName() !== true) {
    e.preventDefault();
  }
  if (validateLName() !== true) {
    e.preventDefault();
  }
  if (validateEmail() == false) {
    e.preventDefault();
  }
  if (validateCourse() == false) {
    e.preventDefault();
  }
  if (validatePhone() == false) {
    e.preventDefault();
  }
  if (validatePassword() == false) {
    e.preventDefault();
  }
}

myform.addEventListener("submit", submitForm);
