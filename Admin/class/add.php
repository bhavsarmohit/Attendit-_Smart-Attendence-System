<?php
session_start();

require_once '../Database/config.php';
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
  $cname=$_POST['classname'];
  $adminid=$_SESSION['id'];
  $sql="INSERT INTO `class_data` (`id`, `classname`, `classteacherid`, `timestamp`) VALUES (NULL, '$cname', '$adminid', '$date');";
      if($mysqli->query($sql) === TRUE)
    {
      echo "Data inserted";
    }
    else
    {
      echo "not inserted";  
    }
    }
  } 




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <title>Add Teachers</title> -->
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <!-- write your code here -->
        <div class="row">
          
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <center><h4 class="card-title">Add Class</h4></center>
                <form class="form-sample" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                  <center>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Class Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="classname"class="form-control" required />
                      </div>
                    </div>
                  </div>
                  <button  type="submit" name="submit" class="btn btn-primary mr-2">Add</button>
                </center>
                 
                 
                 
                 
                </form>
              </div>
            </div>
          </div>
        </div>

        
        <!-- ----------- -->
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
