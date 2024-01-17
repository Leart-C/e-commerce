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
          <a href="Login.php">
            <li><i class="fa-solid fa-user"></i></li>
          </a>
        </ul>
      </div>
    </div>
  </head>

  <!-- login -->
  <div class="body">
    <div class="container-box">
      <header>Log in</header>
      <form action="success.html">
        <div class="field email-field">
          <div class="input-field">
            <input type="email" placeholder="Enter your email" class="email" />
          </div>
          <span class="error email-error">
            <i class="bx bx-error-alt error-icon"></i>
            <p class="error-text">Please enter a valid email</p>
          </span>
        </div>
        <!-- second field create pass-->
        <div class="field create-password">
          <div class="input-field">
            <input type="password" placeholder="Password" class="password" />
            <i class="bx bx-hide show-hide"></i>
          </div>
          <span class="error password-error">
            <i class="bx bx-error-alt error-icon"></i>
            <p class="error-text">
              Enter at least 8 char with number,symbol,small and capital
              letter.
            </p>
          </span>
        </div>
        <!-- third field -->
        <!-- <div class="field confirm-password">
            <div class="input-field">
              <input
                type="password"
                placeholder="Confirm Password"
                class="cPassword"
              />
              <i class="bx bx-hide show-hide"></i>
            </div>
            <span class="error cPassword-error">
              <i class="bx bx-error-alt error-icon"></i>
              <p class="error-text">Password doesn't match</p>
            </span>
          </div> -->
        <div class="input-field button">
          <input type="submit" value="Submit" />
        </div>
      </form>
    </div>
  </div>
</body>

</html>