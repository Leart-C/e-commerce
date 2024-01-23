addEventListener("DOMContentLoaded", (event) => {
  let i = 0;
  let imgArray = ["./img/shoe1.jpg", "./img/shoe2.jpg", "./img/shoe3.jpg"];

  function changeImg() {
    document.getElementById("slideshow").src = imgArray[i];

    if (i < imgArray.length - 1) {
      i++;
    } else {
      i = 0;
    }
    //setTimeout("changeImg()", 2600);
  }

  const slideshowTrigger = document.getElementById("changeSlide");
  if (slideshowTrigger) {
    slideshowTrigger.addEventListener("click", () => {
      changeImg();
    });
  }

  let nameRegex = /^[A-Z][a-z]{3,8}$/;
  let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;

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
    if (!emailError.test(emailInput.value)) {
      emailError.innerText = "invalid email";
      return;
    }
    alert("form submitet succesfully!");
  }
  const validateFormTrigger = document.getElementById("validate");
  if (validateFormTrigger) {
    validateFormTrigger.addEventListener("click", () => {
      validateForm();
    });
  }
});
