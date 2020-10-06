<?php

if (isset($_POST['login-button'])) {

  require 'dbh.inc.php';

  $LoginEmail = mb_strtolower($_POST['login-email']);
  $LoginPassword = $_POST['login-password'];



  if (empty($LoginEmail)||empty($LoginPassword)){
    header("Location: ..\..\index.php?error=EmptyFields");
    exit();
  }else{
    $LoginQuery = "Select * FROM users WHERE UserEmail=?;";
    $Statment = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($Statment,$LoginQuery)){
      header("Location: ..\..\index.php?error=UnknownError");
      exit();
    }else{
      mysqli_stmt_bind_param($Statment,"s",$LoginEmail);
      mysqli_stmt_execute($Statment);
      $result = mysqli_stmt_get_result($Statment);
      $row = mysqli_fetch_assoc($result);
      $check = password_verify($LoginPassword,$row['UserPassword']);
      if ($row['UserEmail'] == $LoginEmail) {
        if ($check == true) {
          session_start();
          $_SESSION['UserID'] = $row['UserID'];
          header("Location: ..\..\index.php?Login=Success");
          exit();
        }else{
          header("Location: ..\..\index.php?error=SomethingIsntRight");
          exit();
        }
      }else{
        header("Location: ..\..\index.php?error=NotRegistered");
        exit();
      }






    }
  }
}


 ?>
