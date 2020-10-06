<?php   require '..\/includes/parts/header.inc.php'; ?>

<?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == 'MissingFields') {
      // EmptyFields.
      echo '
      <div class="alert alert-danger floater-alert alert-dismissible fade show">
        <strong>Error!</strong> It Appears some fields were left empty!
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
      ';
    }elseif ($_GET['error'] == 'EmailTaken'){
      //something isnt right
      echo '
      <div class="alert alert-warning floater-alert alert-dismissible fade show">
        <strong>Error!</strong> It looks like you already have an account! <a href=" ..\../index.php">Login</a>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
      ';
    }elseif($_GET['error'] == 'SQLError') {
      //php error
      echo '
      <div class="alert alert-danger floater-alert alert-dismissible fade show">
        <strong>Error!</strong> A problem has been occurred while submitting your data.
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
      ';
    }elseif($_GET['error'] == 'PasswordsDontMatch') {
      //Email not registered
      echo '
      <div class="alert alert-danger floater-alert alert-dismissible fade show">
        <strong>Error!</strong> Those Passwords don\'t match !
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
      ';
    }elseif($_GET['error'] == 'EmailsDontMatch') {
      //Email not registered
      echo '
      <div class="alert alert-danger floater-alert alert-dismissible fade show">
        <strong>Error!</strong> emails don\'t match !
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
      ';
    }
    elseif($_GET['created'] == 'True') {
      //Email not registered
      echo '
      <div class="alert alert-success floater-alert alert-dismissible fade show">
        <strong>Error!</strong> Success! <a href=" ..\../index.php">Login</a>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
      ';
    }
  }
?>


  <div class="register-page-wrapper">
    <div class="fluid-container">
      <div class="row col-lg-5 col-sm-12">
        <form class="register-form" id="register-form" action="..\includes/register.inc.php" method="post">
          <h1>REGISTER</h1>
          <h2>IRFC PLAYER PORTAL</h2>
          <input type="email" placeholder="Email" autocomplete="off" name="Email1" value="">
          <input type="email" placeholder="Confirm Email" autocomplete="off" name="Email2" value="">
          <input autocomplete="off" type="password" placeholder="Password" name="Password1" value="">
          <input autocomplete="off" type="password" placeholder="Confirm Password" name="Password2" value="">
          <input autocomplete="off" type="tel" placeholder="Mobile Number" name="UserNumber" value="">
          <button class="register-button" type="submit" form="register-form" name="register-button">REGISTER</button>
          <div class="helper-links">
            <a href="..\../index.php">LOGIN</a>
          </div>
        </form>
      </div>
    </div>
  </div>



<?php require '..\/includes/parts/footer.inc.php'; ?>
