<?php   require './dist/includes/parts/header.inc.php'; ?>

<?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == 'EmptyFields') {
      // EmptyFields.
      echo '
      <div class="alert alert-danger floater-alert alert-dismissible fade show">
        <strong>Error!</strong> It Appears some fields were left empty!
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
      ';
    }elseif ($_GET['error'] == 'SomethingIsntRight'){
      //something isnt right
      echo '
      <div class="alert alert-danger floater-alert alert-dismissible fade show">
        <strong>Error!</strong> Something wasn\'t right!
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
      ';
    }elseif($_GET['error'] == 'UnknownError') {
      //php error
      echo '
      <div class="alert alert-danger floater-alert alert-dismissible fade show">
        <strong>Error!</strong> A problem has been occurred while submitting your data.
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
      ';
    }elseif($_GET['error'] == 'NotRegistered') {
      //Email not registered
      echo '
      <div class="alert alert-danger floater-alert alert-dismissible fade show">
        <strong>Error!</strong> There isn\'t an account linked to that email address!
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
      ';
    }
  }
?>

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
        <form id="login-form" class="login-form col-lg-4 col-md-5" autocomplete="on" action="./dist/includes/login.inc.php" method="post">
          <div class="logo-container">
            <img src="./dist/images/logo.jpg" alt="IRFC 150 YEAR SPECIAL LOGO">
          </div>
          <input autocomplete="on" type="email" placeholder="Email" name="login-email" value="">
          <input autocomplete="on" type="password" placeholder="Password" name="login-password" value="">
          <button class="login-button" type="submit" form="login-form"  name="login-button">Login</button>
          <div class="helper-links">
            <a href="#">Forgotten Password?</a>
            <a href=".\dist/pages/register.php">Register</a>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require './dist/includes/parts/footer.inc.php'; ?>
