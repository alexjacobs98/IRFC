<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    session_start();
    echo "you are logged in";

     ?>
     <form id="logout" action=" ..\..\dist/includes/logout.inc.php" method="post">

     </form>
     <button type="submit" form="logout" name="logout">logout</button>
  </body>
</html>
