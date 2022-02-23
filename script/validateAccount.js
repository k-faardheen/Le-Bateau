function validate() {
  let vblank = validateBlank();

  let vname = validateName();

  let vpass = validatePassword();

  let cAge = checkAge();

  let cPass = comparePass();

  if (
    vblank === true ||
    vname === true ||
    vpass === true ||
    cAge === true ||
    cPass === true
  ) {
    return false;
  }
  return true;
}
let validateBlank = () => {
  let fname = document.getElementById("fname").value.trim();
  let lname = document.getElementById("lname").value.trim();
  let pass = document.getElementById("password").value.trim();
  let cpass = document.getElementById("confirm-pass").value.trim();
  let email = document.getElementById("email").value.trim();
  let city = document.getElementById("city").value.trim();
  let state = document.getElementById("state").value.trim();
  let profession = document.getElementById("profession").value.trim();

  if (fname.length === 0) {
    document.getElementById("fname").value.focus();
    return true;
  }
  if (lname.length === 0) {
    document.getElementById("lname").value.focus();
    return true;
  }
  if (pass.length === 0) {
    document.getElementById("password").value.focus();
    return true;
  }
  if (cpass.length === 0) {
    document.getElementById("confirm-pass").value.focus();
    return true;
  }
  if (email.length === 0) {
    document.getElementById("email").value.focus();
    return true;
  }

  if (city.length === 0) {
    document.getElementById("city").value.focus();
    return true;
  }
  if (state.length === 0) {
    document.getElementById("state").value.focus();
    return true;
  }
  if (profession.length === 0) {
    document.getElementById("profession").value.focus();
    return true;
  }
  return false;
};

let validateName = () => {
  let fname = document.getElementById("fname").value.trim();
  let lname = document.getElementById("lname").value.trim();
  if (lname.length <= 5 || lname.length >= 15) {
    return true;
  }
  if (fname.length <= 5 || fname.length >= 15) {
    return true;
  }

  return false;
};

let validatePassword = () => {
  let pass = document.getElementById("password").value.trim();

  const regex =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/g;
  let x = regex.test(pass);

  if (x == false) {
    document.getElementById("password").value.focus();
    return true;
  }
  
  return false;
  
  // Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:
  // ^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$
};

let comparePass = () => {
  let pass = document.getElementById("password").value.trim();
  let cpass = document.getElementById("confirm-pass").value.trim();
  if (pass !== cpass) {
    document.getElementById("confirm-pass").value.focus();
    return true;
  }
  return false;
};
let checkAge = () => {
  let dob = document.getElementById("dob").value;
  let year = dob.substr(0, 4);

  let currentYear = new Date().getFullYear();

  if (currentYear - year < 10) {
    document.getElementById("dob").value.focus();
    return true;
  }
  return false;
};
