<!doctype html>
<html>
  <head>

        <title>User Login</title>

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
	
	 <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">CIRCLE</a>
          </div>
          <ul class="nav navbar-nav">

            <?php
              if(!isset($_COOKIE['Assignment2_session_cookie'])) {
                echo "<li><a href='user-profile.php'></t>Profile</t></a></li>";
              }
            ?>

          </ul>
          <ul class="nav navbar-nav navbar-right">

          <?php
            if(!isset($_COOKIE['Assignment2_session_cookie'])) {
              echo "<li><a href='user-login.php'> Log In </a></li>";
            }
          ?>

          <?php
            if(isset($_COOKIE['Assignment2_session_cookie'])) {
              echo "<li><a href='user-logout.php'> Log Out </a></li>";
            }
          ?>

          </ul>
        </div>
      </nav> 
	

      <div class="container">
       
        <div class=col-sm-6>
<div class="container-fluid bg-1 text-center">
          <form action ='user-login.php' method='POST' enctype='multipart/form-data'>

            <div class="form-group row">
			</br>
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" Placeholder="User Email">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password" Placeholder="Password">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" id="submit" name="submit">Login</button>

            

          </form>

        </div>

      </div>
</div>
    </body>
  </html>


  <?php
    if(isset($_POST['submit'])) {
      login();
    }
  ?>

  <?php
    function login()
    {
      $user_email = 'ayodya@gmail.com';
      $user_password = 'user123';

      $email_in = $_POST['email'];
      $password_in = $_POST['password'];

      if(($email_in == $user_email)&&($password_in == $user_password)) {
        session_set_cookie_params(300);
        session_start();
        session_regenerate_id();

        setcookie('Assignment2_session_cookie', session_id(), time() + 300, '/');

        $token = generate_token();

        setcookie('csrf_token', $token, time() + 300, '/', 'localhost',true);

        header("Location:user-profile.php");
        exit;
      }else{
        echo "<script> alert('Invalid Credentials, Please try again.') </script>";
      }
    }

    function generate_token(){
      return sha1(base64_encode(openssl_random_pseudo_bytes(30)));
    }
  ?>
