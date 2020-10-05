<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>IRFC Player Portal</title>
    <link rel="stylesheet" href="./dist/styles/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="login-wrapper">
      <div class="video-container">
        <video src="./dist\videos\login-background.mp4" loop muted autoplay poster="">
        </video>
      </div>
      <div class="video-overlay">
      </div>

      <div class="fluid-container form-container">
        <div class="row ">
          <form id="login-form" class="login-form col-lg-4 col-md-5" action="./dist/includes/signup.inc.php" method="post">
            <div class="logo-container">
              <img src="./dist/images/logo.jpg" alt="">
            </div>
            <input type="email" placeholder="Email" name="login-email" value="">
            <input type="password" placeholder="Password" name="login-password" value="">
            <button type="submit" form="login-form"  name="login-button">Login</button>
            <div class="helper-links">
              <a href="#">Forgotten Password?</a>
              <a href="#">Register</a>
            </div>
          </form>
        </div>
      </div>

    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="./dist/js/scripts.js" charset="utf-8"></script>
</html>
