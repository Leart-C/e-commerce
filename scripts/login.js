const nameRegex = /^(?=.*[0-9])(?=.*[A-Z]).{5,}$/; // capital letter, min 5 letters, numbers, lowercase eletters
let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;

const submitLoginButton = document.getElementById("submit-login");

function validateForm() {
  let nameInput = document.getElementById("name");
  let nameError = document.getElementById("nameError");
  let emailInput = document.getElementById("email");
  let emailError = document.getElementById("emailError");

  nameError.innerText = "";
  emailError.innerText = "";

  if (!nameRegex.test(nameInput.value)) {
    nameError.innerText = "invalid name";
    return;
  }

  if (!emailRegex.test(emailInput.value)) {
    emailError.innerText = "invalid email";
    return;
  }

  return true;
}

if (submitLoginButton) {
  submitLoginButton.addEventListener("click", validateForm);
}
