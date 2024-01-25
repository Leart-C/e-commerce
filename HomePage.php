
<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E commerce |Home</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- navbar -->


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
          <?php if (isset($_SESSION['authenticated_user']['email'])): ?>
            <li>Hello:
              <?php echo $_SESSION['authenticated_user']['email']; ?>
            </li>

            <a href="logout.php">
              <li> Logout</li>
            </a>

          <?php else: ?>
            <a href="Login.php">
              <li><i class="fa-solid fa-user"></i></li>
            </a>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </head>

  <!-- hero section -->

 
  <?php if (isset($_SESSION['authenticated_user']['user_role']) && $_SESSION['authenticated_user']['user_role'] === 'admin'): ?>
    <div>
      <a href="dashboard.php">
        <li>Go to Dashboard</li>
      </a>
    </div>
  <?php endif; ?>

  <div class="container">
    <h1>Good Shoes</h1>
    <h2>Take You To Good Places</h2>
    <p>Save more with coupons & up to 60% off !</p>
    <button>shop now</button>
  </div>

  <!-- feature  -->
  <div id="kontenti">
    <h2>Slide Show: shfaqja e imazheve</h2>
    <header>
      <img id="slideshow" src="./img/shoe1.jpg" />
    </header>
    <button id="changeSlide">Next</button>
  </div>



  <section id="sales">
    <h3>WE HAVE DISCOUNT!!</h3>
    <h1>Discount up to <span>60%</span> on all shoes collection</h1>
    <button>Shop Now</button>
  </section>

  <section id="section-holder">
    <div class="section-one">
      <h4>Buy one Get one Free</h4>
      <h1>The best shoe brand</h1>
      <span>we care for your comfiness</span>
      <button>Learn More</button>
    </div>
    <div class="section-two">
      <h4>Gift Card</h4>
      <h1>The best shoe brand</h1>
      <span>we care for your comfiness</span>
      <button>Learn More</button>
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
  <script type="text/javascript" src="index.js"></script>

</body>


</html>