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
document.addEventListener(onload, changeImg());
