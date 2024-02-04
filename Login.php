<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E commerce |Register Form</title>

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- kettu fillon header -->
  <header>
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
          <a href="Login.php">
            <li><i class="fa-solid fa-user"></i></li>
          </a>
        </ul>
      </div>
    </div>
  </header>

  <!-- login -->
  <!-- <form id="myForm">
    <label>Name:</label>
    <input type="text" id="name">
    <div class="error-message" id="nameError"></div>

    <label>Email:</label>
    <input type="text" id="email">
    <div class="error-message" id="emailError"></div>

    <button id="submit-login" type="button">Submit</button>
  </form> -->
  <div class="container-box-login">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <input type="text" name="email" placeholder="email..."> <br><br>
      <input type="text" name="password" placeholder="password..."><br><br>

      <input type="submit" name="loginBtn" value="Login"><br><br>
      <a href="Sign_up.php">Sign Up</a>

    </form>
  </div>

  <?php include_once './controller/loginController.php'; ?>


  <script src="./scripts/login.js"></script>
</body>

</html>