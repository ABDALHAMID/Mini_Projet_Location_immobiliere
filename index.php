<?php
session_start();
require('database_connection.php');






?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>rentit</title>
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/icons/retiticon.ico" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="assets/css/costom.css">
  <link href="assets/css/style.css" rel="stylesheet">
 
  
</head>

<body>




  <?php


$requestUri = $_SERVER['REQUEST_URI'];

// Parse the URL to extract the path
$urlParts = parse_url($requestUri);
$path = $urlParts['path'];
$requestedFile = $_SERVER['DOCUMENT_ROOT'] . $path;

  if (isset($_GET['404']) || !file_exists($requestedFile)) 
  {
    include('page404.php');
  }
  else
    include('./view/home.php');

  ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>

</html>