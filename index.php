<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="./dist/styles/styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IRFC PLAYER PORTAL</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
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
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="dist\js\scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>