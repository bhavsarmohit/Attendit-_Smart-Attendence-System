<?php
session_start();
$adminid=$_SESSION['id'];
require_once '../Database/config.php';
$date = date('Y/m/d H:i:s');
$mysqli = new mysqli($hn,$un,"",$db);
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else
{  
  //load classes
  
  $classes = array();
  $classid=array();
  $sql = "SELECT * FROM `class_data` WHERE `classteacherid`='$adminid'";
  $result = $mysqli->query($sql);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    //echo $row["classname"];
    array_push($classes,$row["classname"]) ;
    array_push($classid,$row["id"]) ;

  }

  } else 
  {
    echo "0 results";
  }
}

if (isset($_POST['submit']))
{
  $mysqli = new mysqli($hn,$un,"",$db);
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else
{
  $selected = $_POST['classnames'];
  if($selected=="Select Class")
  {
    echo 'Please select Class';  
  }
  else
  {
    
    //echo $selected;
    $divison_name=$_POST['div_name'];
    $selected_classid=$classid[$selected];
    $selected_classname=$classes[$selected];

    $check_division="select * from division_data where d_name='$divison_name' and d_adminid='$adminid' and d_classid='$selected_classid'";
    $raw=mysqli_query($mysqli,$check_division);
    
    if(mysqli_num_rows($raw))
    {
      echo "Already Exists found";
    }
    else
    {
      $sql="INSERT INTO `division_data` (`id`, `d_name`, `d_classid`, `d_classname`, `d_adminid`) VALUES (NULL, '$divison_name', '$selected_classid', '$selected_classname', '$adminid');";
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
                <center><h4 class="card-title">Add Division</h4></center>
                <form class="form-sample" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                  <center>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Division Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="div_name" class="form-control" required/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Select Class</label>
                      <div class="col-sm-9">
                        <select  class="form-control" name="classnames"required  oninvalid="this.setCustomValidity('Select Class Name')" oninput="this.setCustomValidity('') ">
                        <option  value="">Select Class</option>
                          <?php
                          for($x=0;$x<count($classes);$x++)
                          {
                            echo '<option value="' .$x. '">' . $classes[$x] . '</option>';
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Select Student</label>
                      <div class="col-sm-9">
                        <select class="form-control">
                          <option>Group1</option>
                          <option>Group2</option>
                        </select>
                      </div>
                    </div>
                  </div> -->
                  <button  type="submit" name='submit' class="btn btn-primary mr-2">Add</button>
                </center>
                 
                 
                 
                 
                </form>
              </div>
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
