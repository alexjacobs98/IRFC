<?php 
 session_start();
 $_SESSION['UserID'] = 1;
 
 if (isset($_SESSION['UserID'])) {
   
 }
 else{
   header("Location: index.php");
 }

?>

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