<?php


  if (isset($_POST['register-button'])){

    $email1 = $_POST['Email1'];
    $email1 = mb_strtolower($email1);
    $email2 = $_POST['Email2'];
    $email2 = mb_strtolower($email2);
    $password1 = $_POST['Password1'];
    $password2 = $_POST['Password2'];
    $number = $_POST['UserNumber'];

    require 'dbh.inc.php';

    //Checking to see if fields are empty
    if (empty($email1)||empty($email2)||empty($password1)||empty($password2)||empty($number)){
      header("Location: ..\\pages/register.php?error=MissingFields");
    }else{
      //If the fields are not Empty
      if ($email1 == $email2) {
        if ($password1 == $password2) {
          $sql = "Select * From users WHERE UserEmail = ? ;";
          $connection = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($connection,$sql)) {
            header("Location: ..\\pages/register.php?error=SQLError");
          }else {
            mysqli_stmt_bind_param($connection,"s",$email1);
            mysqli_stmt_execute($connection);
            mysqli_stmt_store_result($connection);
            $rows = mysqli_stmt_num_rows($connection);
            if ($rows > 0) {
              header("Location: ..\\pages/register.php?error=EmailTaken");
            }else {
              $sql = "INSERT INTO `users` ( `UserEmail`, `UserPassword`, `UserNumber`) VALUES (?, ?, ?);";
              $connection = mysqli_stmt_init($conn);
              mysqli_stmt_prepare($connection,$sql);
              $hash = password_hash($password1,PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($connection,"sss",$email1,$hash,$number);
              mysqli_stmt_execute($connection);
              header("Location: ..\..\index.php?created=True");
              echo "complete";
            }
          }
        }else{
          header("Location: ..\\pages/register.php?error=PasswordsDontMatch");
        }
      }else{
        header("Location: ..\\pages/register.php?error=EmailsDontMatch");
      }
    }

  }

 ?>
