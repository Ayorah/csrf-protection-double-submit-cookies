<!doctype html>
<html>
  <head>

        <title>User Profile</title>

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
      <!-- navbar start -->
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
      <!-- navbar end -->

      <!-- body content start -->
	  <div class="container-fluid bg-1 text-center">
      <div class="container">
        <div class="row" align="center" style="padding-top: 100px;">
        <div class="col-12">

            <div class="card">
			
              <h5 class="card-header">Update Profile</h5>
              <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">

                            <script>

                            function getCookie(cname) {
                                var name = cname + "=";
                                var decodedCookie = decodeURIComponent(document.cookie);
                                var ca = decodedCookie.split(';');
                                for(var i = 0; i <ca.length; i++) {
                                    var c = ca[i];
                                    while (c.charAt(0) == ' ') {
                                        c = c.substring(1);
                                    }
                                    if (c.indexOf(name) == 0) {
                                        return c.substring(name.length, c.length);
                                    }
                                }
                                return "";
                            }


                            function submitForm(oFormElement)
                            {
                                document.getElementById("csrf_Token").value=getCookie("csrf_token");

                            }
                            </script>



                <?php if(isset($_COOKIE['Assignment2_session_cookie'])) {
                echo "
						                <form method='post' action='csrf-validate.php' onsubmit='submitForm(this);'>

                            <!-- csrf token creation -->
                              <input type='hidden' name='csrf_Token' id='csrf_Token' value=''>
                            <!-- csrf token end  -->

                            <!-- detail form content start -->
                            <div class='form-group row'>
                            	<label for='name' class='col-sm-2 col-form-label'>Full Name</label>
                              <div class='col-sm-10'>
                                <input type='text' class='form-control' id='name' name='name' placeholder='Full Name' required>
                              </div>
                            </div>

                          	<div class='form-group row'>
                              <label for='hometown' class='col-sm-2 col-form-label'>Home Town</label>
                              <div class='col-sm-10'>
                                <input type='text' class='form-control' id='hometown' name='hometown' placeholder='Home Town' required>
                              </div>
                          	</div>

							              <div class='form-group row'>
                              <label for='degree' class='col-sm-2 col-form-label'>University</label>
                              <div class='col-sm-10'>
                                <input type='text' class='form-control' id='university' name='university' placeholder='University' required>
                              </div>
                          	</div>

                          	<div class='form-group row'>
                                <label for='year' class='col-sm-2 col-form-label'>Age</label>
                            <div class='col-sm-10'>
                                <input type='number' class='form-control' id='age' name='age' placeholder='Age' required>
                            </div>
                          	</div>

                            <button type='submit' class='btn btn-primary' >Submit</button>
                            <!-- form content end-->

                       </form>";
                }
                ?>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
              </div>
            </div>
        </div>
    </div>
	</div>
</div>
<!-- body content start -->


</body>
</html>
