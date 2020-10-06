<?php   require './dist/includes/parts/header.inc.php'; ?>
<?php  if (isset($_SESSION['UserID'])){header("Location: ./dist/pages/menu.php");}?>
  <div class="login-wrapper">
    <div class="video-container">
      <video src="./dist\videos\login-background.mp4" loop muted autoplay poster="">
      </video>
    </div>
    <div class="video-overlay">
    </div>
    <div class="fluid-container form-container">
      <div class="row ">
        <form id="login-form" class="login-form col-lg-4 col-md-5" autocomplete="on" action="./dist/includes/signup.inc.php" method="post">
          <div class="logo-container">
            <img src="./dist/images/logo.jpg" alt="IRFC 150 YEAR SPECIAL LOGO">
          </div>
          <input autocomplete="on" type="email" placeholder="Email" name="login-email" value="">
          <input autocomplete="on" type="password" placeholder="Password" name="login-password" value="">
          <button type="submit" form="login-form"  name="login-button">Login</button>
          <div class="helper-links">
            <a href="#">Forgotten Password?</a>
            <a href=".\dist/pages/register.php">Register</a>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require './dist/includes/parts/footer.inc.php'; ?>
