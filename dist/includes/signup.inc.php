<?php

if (isset($_POST['login-button'])) {

  require 'dbh.inc.php';

  $LoginEmail = $_POST['login-email'];
  $LoginPassword = $_POST['login-password'];



  if (empty($LoginEmail)||empty($LoginPassword)){
    exit();
  }else{
    $LoginQuery = "Select * FROM users WHERE Email=?;";
    $Statment = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($Statment,$LoginQuery)){
      exit();
    }else{
      mysqli_stmt_bind_param($Statment,"s",$LoginEmail);
      mysqli_stmt_execute($Statment);
      $result = mysqli_stmt_get_result($Statment);
      $row = mysqli_fetch_assoc($result);

      if ($row['Email'] == $LoginEmail) {
        if ($row['Password'] == $LoginPassword) {
          session_start();
          $_SESSION['UserID'] = $row['UserID'];
          header("Location: ..\..\index.php?Login=success");
          exit();
        }else{
          header("Location: ..\..\index.php?error=NoMatch");
          exit();
        }
      }else{
        header("Location: ..\..\index.php?error=NoMatch");
      }






    }
  }
}


 ?>
