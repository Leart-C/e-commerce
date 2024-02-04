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
  <?php include("./partials/header.php") ?>

  <div class="body">
    <div class="container-box">
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="email" placeholder="email..."> <br><br>
        <input type="text" name="password" placeholder="password..."><br><br>

        <input type="submit" name="loginBtn" value="Login"><br><br>
        <a href="Sign_up.php">Sign Up</a>

      </form>
    </div>
  </div>




  <?php include_once './controller/loginController.php'; ?>


  <script src="./scripts/login.js"></script>
</body>

</html>