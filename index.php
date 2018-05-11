<!doctype html>
<html>
  <head>

        <title> Cross-site Request Forgery protection </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


       
<style>
  .bg-1 { 
      background-color: #1abc9c;
      color: #ffffff;
  }
  </style>

    </head>

    <body>

      <!-- nav bar start -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">CIRCLE</a>
          </div>
          <ul class="nav navbar-nav">

            <?php
              if(isset($_COOKIE['Assignment1_session_cookie'])) {
                echo "<li><a href='user-profile.php'></t>Profile</t></a></li>";
              }
            ?>

          </ul>
          <ul class="nav navbar-nav navbar-right">

          <?php
            if(!isset($_COOKIE['Assignment1_session_cookie'])) {
              echo "<li><a href='user-login.php'> Log In </a></li>";
            }
          ?>

          <?php
            if(isset($_COOKIE['Assignment1_session_cookie'])) {
              echo "<li><a href='user-logout.php'> Log Out </a></li>";
            }
          ?>

          </ul>
        </div>
      </nav>
      <!-- navbar end -->
<div class="container-fluid bg-1 text-center">
  <h1>CIRCLE</h1>
  <h4>Join The CIRCLE </h4>
  <img src="images/photo.jpg" class="img-circle" alt="girl" width="350" height="350">
  <h3>grab your chance!</h3>
</div>
    </body>
  <html>
