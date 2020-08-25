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

<body class="">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="card mx-auto" style="width: 20rem;">
                <div class="card-header"><h1 class="h4 text-gray-900 mb-4">User Registration Form</h1></div>

            <div class="card-body">
              <form id="register_form" onsubmit="return false" autocomplete="off">
                <div class="form-group">
                  <label for="fullname">Full Name</label>
                  <input type="text" name="fullname" class="form-control form-control-user" id="fullname" placeholder="Enter fullname">
                  <small id="fn_error" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="password1">Password</label>
                  <input type="password" name="password1" class="form-control form-control-user"  id="password1" placeholder="Password">
                  <small id="p1_error" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="password2">Re-enter Password</label>
                  <input type="password" name="password2" class="form-control form-control-user"  id="password2" placeholder="Password">
                  <small id="p2_error" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="usertype">Usertype</label>
                  <select name="usertype" class="form-control form-control-user" id="usertype">
                    <option value="">Choose User Type</option>
                    <option value="Admin">Admin</option>
                    <option value="Other">Other</option>
                  </select>
                  <small id="t_error" class="form-text text-muted"></small>
                </div>
                
            </div>
          <div class="card-footer text-muted">
            <button type="submit" name="user_register" class="btn btn-primary"><span class="fa fa-user"></span>&nbsp;Sign Up</button>
              </form>
              <hr>

              <div class="text-center">
                <a class="small" href="index.php">Already have an account? Sign in!</a>
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
