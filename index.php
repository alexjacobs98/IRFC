<?php include("includes/header.inc.php"); ?>
  <div class="login-page-container">
    <div class="video-container">
      <video autoplay loop muted src="./dist/videos/login-background.mp4"></video>
      <div class="video-overlay"></div>
      <div class="login-form-container row">
        <form class="p-3 pt-5 pb-5 col-lg-4 col-md-6 col-sm-12" action="post">
          <div class="logo-container">
            <img class="pb-4" src="./dist/images/logo.jpg" alt="">
          </div>
          <input type="email" placeholder="EMAIL" name="login-email">
          <input type="password" placeholder="PASSWORD" name="login-password">
          <button class="btn btn-default">LOGIN</button>
          <div class="helper-links">
            <a href="">FORGOTTEN PASSWORD</a>
            <a href="">REGISTER</a>
          </div>
        </form>
      </div>
    </div>
  </div> 
<?php include("includes/footer.inc.php"); ?>