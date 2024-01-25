
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
          <?php if (isset($_SESSION['user_email'])): ?>
            <li>Hello:
              <?php echo $_SESSION['user_email']; ?>
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