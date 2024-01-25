<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E commerce |ContactUs</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <head>
    <div class="navbar">
      <div class="logo">
        <h1>SneakPeak</h1>
      </div>
      <div class="nav-list">
        <ul>
          <a href="HomePage.php">
            <li>Home</li>
          </a>
          <a href="About.php">
            <li>About</li>
          </a>
          <a href="Products.php">
            <li>Products</li>
          </a>
          <a href="News.php">
            <li>News</li>
          </a>
          <a href="ContactUs.php">
            <li>Contact Us</li>
          </a>
          <a href="Sign_up.php">
            <li><i class="fa-solid fa-user"></i></li>
          </a>
        </ul>
      </div>
    </div>
  </head>

  <section id="contactUs">
    <div class="contactHolder">
      <div class="contact1">
        <div class="location">
          <i class="fa-solid fa-location-dot"></i>
          <span>Lorem ipsum dolor sit amet.</span>
          <i class="fa-solid fa-envelope"></i>
          <span>Lorem ipsum dolor sit amet.</span>
        </div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93880.26598244037!2d21.076325491680127!3d42.66647680223406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee605110927%3A0x9365bfdf385eb95a!2sPristina!5e0!3m2!1sen!2s!4v1700400762995!5m2!1sen!2s"
          width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="contact2">
        <form>
          <p>Emri: <input type="text" placeholder="name..." /></p>
          <p>Email: <input type="email" placeholder="email..." /></p>
          <p>
            <textarea name="" id="" cols="30" rows="10" placeholder="Message us here..."></textarea>
          </p>
        </form>
      </div>
    </div>
  </section>

  <footer class="footer">
    <h1>SneakPeak</h1>
    <div class="boxHolder">
      <div class="first-box">
        <h4>Contact Us</h4>
        <p><strong>Address:</strong> <span>7 Prospect Hill</span></p>
        <p><strong>Phone:</strong> <span> +44 070 6842 8235</span></p>
        <p><strong>ZIP code:</strong> <span> PL9 9ST</span></p>
        <div class="icon">
          <ul>
            <li><i class="fa-brands fa-facebook"></i></li>
            <li><i class="fa-brands fa-instagram"></i></li>
            <li><i class="fa-brands fa-linkedin"></i></li>
          </ul>
        </div>
      </div>

      <div class="second-box">
        <h4>About</h4>
        <p>About Us</p>
        <p>Delivery Information</p>
        <p>Privacy Policy</p>
      </div>

      <div class="third-box">
        <h4>My Account</h4>
        <p>Sign In</p>
        <p>View Cart</p>
        <p>My Website</p>
      </div>
    </div>
  </footer>
</body>

</html>