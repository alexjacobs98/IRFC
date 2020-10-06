<?php   require '..\/includes/parts/header.inc.php'; ?>

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
          <button type="submit" form="register-form" name="register-button">REGISTER</button>
        </form>
      </div>
    </div>
  </div>

<?php require '..\/includes/parts/footer.inc.php'; ?>
