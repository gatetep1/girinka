<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Girinka Program System</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/main.js"></script>

</head>

<body class="bg-gradient-primary______">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-5 shadow-lg my-5">
          <div class="card-body p-0" style = "margin-left:18px">
            <!-- Nested Row within Card Body -->
            <div class="row" style = "margin-left:18px">
              <div style = "margin-top:50px"><img style = "border-radius:8px" src = "images/girinka.jpg" height = "400" width = "450">

            </div>

              <div class="col-md-4">
                <div class="p-5">
                  <div class="card mx-auto" style="width: 20rem;">
                      <div class="card-header"><h1 class="h4 text-gray-900 mb-4">User Sign In</h1></div>
                  <div class="card-body">

                  <div class="text-center"></div>
                  
                  <form class = "user" id="form_login" onsubmit="return false">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" name="log_email" id="log_email" placeholder="Enter email">
                      <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="log_password" id="log_password" placeholder="Password">
                    <small id="p_error" class="form-text text-muted"></small>
                  </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Sign in</button>
                    <!-- <span><a href="register.php">Register</a></span> -->
                  </form>
                
                  </div>

                  	<div class="card-footer"><a href="#">Forgot Password?</a> 
                    <!--<a class="small" href="register.php">Create an Account!</a>-->
                    </div>
                    </div>
                    <div class="text-center">
                   
                    </div>
                    </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
