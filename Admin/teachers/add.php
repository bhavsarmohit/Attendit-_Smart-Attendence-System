<?php
session_start();
$adminid=$_SESSION['id'];
require_once '../Database/config.php';
$date = date('Y/m/d H:i:s');
$mysqli = new mysqli($hn,$un,"",$db);
$divisions=array("1","2");
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

function abc($selected_classname)
{
  //global $mysqli;
  $selected = $_POST['selected_class'];
  echo $selected;
 
 
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





  <script>
function sam()
{
  var x = document.getElementById("selected_class");
  var strUser = x.options[x.selectedIndex].value;
  alert(strUser)
 console.log("<?php abc('strUser');?>")
 //document.getElementById("mySelect").options.length=0;
 
 //var x = document.getElementById("mySelect");
 //var opt = document.createElement('option');
  //  opt.innerHTML = "Select Division";
   // opt.value ="";
    //x.add(opt);


//for (var i = 0; i < arr.length; i++)
 //{
  //var opt = document.createElement('option');
   // opt.innerHTML = arr[i];
    //opt.value = arr[i];
    //x.add(opt);
 //}

}
</script>



</head>

<body>
  <div class="container-scroller">
    <!-- write your code here -->
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          
          <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <center>
              <h4 class="card-title">Add Teacher</h4>
            </center>
              <form class="form-sample">
                <p class="card-description">
                  Teacher info
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Prefix</label>
                      <div class="col-sm-9">
                        <select class="form-control">
                          <option>Mr</option>
                          <option>Mrs</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">First Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required pattern="^[A-Za-z -]+$" oninvalid="this.setCustomValidity('Enter First Name')" oninput="this.setCustomValidity('') "/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Middle Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required pattern="^[A-Za-z -]+$" oninvalid="this.setCustomValidity('Enter Middle Name')" oninput="this.setCustomValidity('') "/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Last Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" required pattern="^[A-Za-z -]+$" oninvalid="this.setCustomValidity('Enter Last Name')" oninput="this.setCustomValidity('') "/>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Gender</label>
                      <div class="col-sm-4">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios1" id="membershipRadios2" value="" checked>
                            Male
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios1" id="membershipRadios3" value="option2">
                            Female
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control"  required oninvalid="this.setCustomValidity('Enter Email')" oninput="this.setCustomValidity('') " />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Mobile No</label>
                      <div class="col-sm-9">
                        <input type="mobile" class="form-control" required oninvalid="this.setCustomValidity('Enter Mobile Number')" oninput="this.setCustomValidity('') "/>
                      </div>
                    </div>
                  </div>
                 
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Select Class</label>
                      <div class="col-sm-9">
                        <select name="selected_class" id="selected_class" onchange="sam()" class="form-control" required oninvalid="this.setCustomValidity('Select Class Name')" oninput="this.setCustomValidity('') ">
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


                </div>
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Select Division</label>
                      <div class="col-sm-9">
                        <select id="mySelect" class="form-control" required oninvalid="this.setCustomValidity('Select Division')" oninput="this.setCustomValidity('') ">
                        <option  value="">Select Divsion</option>

                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Select Subject</label>
                      <div class="col-sm-9">
                        <select class="form-control" required oninvalid="this.setCustomValidity('Enter Subject')" oninput="this.setCustomValidity('') ">
                        <option  value="">Select Subject</option>
                          <option>Sub1</option>
                          <option>Sub2</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Teaching Type</label>
                      <div class="col-sm-9">
                        <select class="form-control" required oninvalid="this.setCustomValidity('Enter Teaching Type')" oninput="this.setCustomValidity('') ">
                          <option  value="">Select Teaching</option>
                          <option>Theory</option>
                          <option>Pratical</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Select Batch</label>
                      <div class="col-sm-9">
                        <select class="form-control">
                          <option>Batch1</option>
                          <option>Batch2</option>
                        </select>
                      </div>
                    </div>
                  </div> -->
                </div>

                <button style="float: right;" type="submit" class="btn btn-primary mr-2">Add</button>
              </form>
            </div>
          </div>
        </div>
        
      
       

        

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
