<?php
if(isset($_SESSION['username'])){
  header('Location: Admin/dashboard_nav.html');
exit();
}
require_once 'Admin/Database/config.php';
$date = date('Y/m/d H:i:s');
if (isset($_POST['submit']))
{
  $mysqli = new mysqli($hn,$un,"",$db);
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else
{
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $mobno=$_POST['mobileno'];
  $email=$_POST['email'];
  $clgname=$_POST['clgname'];
  $pass=$_POST['password'];
  $pass=md5($pass);
  $check_email="select * from users where email='$email'";
  $raw=mysqli_query($mysqli,$check_email);
  $count=mysqli_num_rows($raw);
  if($count>0)
  {
      echo "same email";
  }
  else
  {
    $sql="INSERT INTO `users` (`id`, `firstname`, `lastname`, `mobno`, `email`, `clgname`, `pass`, `user_role`, `signup_timestamp`) VALUES (NULL, '$fname', '$lname', '$mobno', '$email', '$clgname', '$pass', 'admin', '$date')";
      if($mysqli->query($sql) === TRUE)
    {
      echo "Data inserted";
      header("Location: index.php"); 
    }
    else
    {
      die("Connection failed: " . $mysqli->query($sql));  
    }
    }
  } 
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <!--  meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Attendit | Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="css/toastr.min.css"/>
  
  <script >
     function success_toast(){
       alert("abc");
      toastr.success("Logged in successfully");
    
    }
  </script>
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" method="post" name="myForm" onsubmit="return validateForm()" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg"  name="firstname" placeholder="First Name" pattern="^[A-Za-z -]+$" >
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="lastname" placeholder="Last Name" pattern="^[A-Za-z -]+$">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="mobileno" placeholder="Mobile Number" maxlength="10" pattern="\d{10}" required >
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" required >
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="clgname" placeholder="College Name" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>
                </div>
                
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" id="remember" name="remember" class="form-check-input" required>
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button  name="submit" input type="submit"class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGNUP
                    </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="index.php" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <script src="js/toastr.min.js"></script>
  <!-- endinject -->
</body>

</html>
