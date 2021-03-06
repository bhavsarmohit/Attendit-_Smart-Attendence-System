<?php
session_start();
if($_SESSION["username"]) {
 
}
else
{
  header("Location:/attendit/index.php");
} 

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <script type="application/javascript" src="../js/rpie.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Attendit</title>
  <!-- plugins:css -->
  
  <link rel="stylesheet" href="../path-to/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="../path-to/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />


  <!-- <script>
    function show(shown) {
      hide_pages();
      document.getElementById(shown).style.display='block';
      return false;
    }
    function hide_pages(shown) {
      document.getElementById('dashboard').style.display='none';
      document.getElementById('divisions-view').style.display='none';
      document.getElementById('divisions-add').style.display='none';
      document.getElementById('divisions-modify').style.display='none';
      document.getElementById('class-view').style.display='none';
      document.getElementById('class-add').style.display='none';
      document.getElementById('class-modify').style.display='none';
      document.getElementById('teachers-view').style.display='none';
      document.getElementById('teachers-add').style.display='none';
      document.getElementById('teachers-modify').style.display='none';
      document.getElementById('students-view').style.display='none';
      document.getElementById('students-add').style.display='none';
      document.getElementById('students-modify').style.display='none';
      document.getElementById('batches-view').style.display='none';
      document.getElementById('batches-add').style.display='none';
      document.getElementById('batches-modify').style.display='none';
      document.getElementById('analysis').style.display='none';
      document.getElementById('reports').style.display='none';
      return false;
    }
  </script> -->

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5"><img src="../images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini"><img src="../images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
       
        <ul class="navbar-nav navbar-nav-right">
         
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              
                <!-- <div class="col-sm-6 col-md-4 col-lg-3">
                  <i class="mdi mdi-account-circle"></i>
              </div>   -->
              <img src="../images/faces/face1.svg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="nav-item nav-settings d-none d-lg-flex dropdown-item">
                <i class="ti-settings text-primary"></i>
                Edit Profile
              </a>
              <a class="dropdown-item" href="logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
          <li class="nav-item" id="nav_dashboard">
            <a onclick="return show('dashboard');" class="nav-link" href="#">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#class" aria-expanded="false" aria-controls="class">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Class</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="class">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a onclick="return show('class-view');" class="nav-link"  href="#">View</a></li>
                <li class="nav-item"> <a onclick="return show('class-add');" class="nav-link"  href="#">Add</a></li>
                <li class="nav-item"><a onclick="return show('class-modify');" class="nav-link"  href="#">Modify</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item"  id="nav_division">
            <a class="nav-link collapsed" data-toggle="collapse" href="#divisions" aria-expanded="false" aria-controls="divisions">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Divisions</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="divisions">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a onclick="return show('divisions-view');" class="nav-link"  href="#">View</a></li>
                <li class="nav-item"> <a onclick="return show('divisions-add');" class="nav-link"  href="#">Add</a></li>
                <li class="nav-item"><a onclick="return show('divisions-modify');" class="nav-link"  href="#">Modify</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item"  id="nav_subjects">
            <a class="nav-link collapsed" data-toggle="collapse" href="#subjects" aria-expanded="false" aria-controls="subjects">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Subjects</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="subjects">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a onclick="return show('subjects-view');" class="nav-link"  href="#">View</a></li>
                <li class="nav-item"> <a onclick="return show('subjects-add');" class="nav-link"  href="#">Add</a></li>
                <li class="nav-item"><a onclick="return show('subjects-modify');" class="nav-link"  href="#">Modify</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#teachers" aria-expanded="false" aria-controls="teachers">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Teachers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="teachers">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a onclick="return show('teachers-view');" class="nav-link"  href="#">View</a></li>
                <li class="nav-item"> <a onclick="return show('teachers-add');" class="nav-link"  href="#">Add</a></li>
                <li class="nav-item"><a onclick="return show('teachers-modify');" class="nav-link"  href="#">Modify</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#students" aria-expanded="false" aria-controls="students">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Students</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="students">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a onclick="return show('students-view');" class="nav-link"  href="#">View</a></li>
                <li class="nav-item"> <a onclick="return show('students-add');" class="nav-link"  href="#">Add</a></li>
                <li class="nav-item"><a onclick="return show('students-modify');" class="nav-link"  href="#">Modify</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#batches" aria-expanded="false" aria-controls="batches">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Batches</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="batches">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a onclick="return show('batches-view');" class="nav-link"  href="#">View</a></li>
                <li class="nav-item"> <a onclick="return show('batches-add');" class="nav-link"  href="#">Add</a></li>
                <li class="nav-item"><a onclick="return show('batches-modify');" class="nav-link"  href="#">Modify</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" onclick="return show('analysis');"  href="#">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Analysis</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" onclick="return show('reports');"  href="#">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li>

          

        </ul>
      </nav>


      <!-- partial -->
      <!-- <div class="main-panel"> -->
        <!-- <div class="content-wrapper"> -->
          <!-- <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row"> -->
                
                <!-- main code here -->
                
                <div id="right-sidebar" class="settings-panel">
                  <i class="settings-close ti-close"></i>
                  <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="edit-profile-tab" data-toggle="tab" href="#edit-profile-section" role="tab" aria-controls="edit-profile-section" aria-expanded="true">Edit Profile</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li> -->
                  </ul>
                  <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="edit-profile-section" role="tabpanel" aria-labelledby="edit-profile-section">
                      <!-- code here code 4565 -->
                      <div class="modal-content d-flex px-3 mb-0">
                        
                      <div class="modal-body">
                        <center>
                        <img src="../images/faces/face1.svg" class="rounded-circle" alt="Profile" width="100" height="100"> 
                        </center>
                        <!-- <center>
                          <input type="file" name="img[]" class="file-upload-default">
                        </center> -->
                      </br>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputUsername1">First Name</label>
                          <input type="text" class="form-control" id="exampleInputUsername1" placeholder="First Name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Last Name</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Mobile Number</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Mobile Number">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">College Name</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="College Name">
                        </div>
                      </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>

                    </div>
                    <!-- To do section tab ends -->
                    
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                      <!-- code here code 5642 -->

                    </div>
                    <!-- chat tab ends -->
                  </div>
                </div>


                <div id="dashboard">
                  <iframe src="dashboard.php" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>

                

                <div id="class-view" style="display:none">
                  <iframe src="class/view.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                <div id="class-add" style="display:none">
                  <iframe src="class/add.php" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                <div id="class-modify" style="display:none">
                  <iframe src="class/modify.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>

                <div id="divisions-view" style="display:none">
                  <iframe src="divisions/view.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                <div id="divisions-add" style="display:none">
                  <iframe src="divisions/add.php" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                <div id="divisions-modify" style="display:none">
                  <iframe src="divisions/modify.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>

                <div id="subjects-view" style="display:none">
                  <iframe src="subjects/view.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                <div id="subjects-add" style="display:none">
                  <iframe src="subjects/add.php" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                <div id="subjects-modify" style="display:none">
                  <iframe src="subjects/modify.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>

                <div id="teachers-view" style="display:none">
                  <iframe src="teachers/view.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                <div id="teachers-add" style="display:none">
                  <iframe src="teachers/add.php" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                <div id="teachers-modify" style="display:none">
                  <iframe src="teachers/modify.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
          
                <div id="students-view" style="display:none">
                  <iframe src="students/view.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                <div id="students-add" style="display:none">
                  <iframe src="students/add.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                <div id="students-modify" style="display:none">
                  <iframe src="students/modify.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
          
                <div id="batches-view" style="display:none">
                  <iframe src="batches/view.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                <div id="batches-add" style="display:none">
                  <iframe src="batches/add.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                <div id="batches-modify" style="display:none">
                  <iframe src="batches/modify.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>

                <div id="analysis" style="display:none">
                  <iframe src="analysis.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>

                <div id="reports" style="display:none">
                  <iframe src="reports.html" style="position: absolute; height: 90%; width: 100%;" frameborder="0"></iframe>
                </div>
                
              <!-- </div>
            </div>
          </div> -->
        <!-- </div> -->
      <!-- </div> -->

      
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <script src="../js/dashboard-nav.js"></script>
  <script src="../js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  <script type="text/javascript">
		
		var obj = {
						values: [15, 50, 20, 85, 30],
						colors: ['#4CAF50', '#00BCD4', '#E91E63', '#FFC107', '#9E9E9E'],
						animation: true, // Takes boolean value & default behavious is false
						animationSpeed: 0, // Time in miliisecond & default animation speed is 20ms
						fillTextData: true, // Takes boolean value & text is not generate by default 
						fillTextColor: '#fff', // For Text colour & default colour is #fff (White)
						fillTextAlign: 1.30, // for alignment of inner text position i.e. higher values gives closer view to center & default text alignment is 1.85 i.e closer to center
						fillTextPosition: 'inner', // 'horizontal' or 'vertical' or 'inner' & default text position is 'horizontal' position i.e. outside the canvas
						doughnutHoleSize: 50, // Percentage of doughnut size within the canvas & default doughnut size is null
						doughnutHoleColor: '#fff', // For doughnut colour & default colour is #fff (White)
						offset: 1, // Offeset between two segments & default value is null
						pie: 'normal', // if the pie graph is single stroke then we will add the object key as "stroke" & default is normal as simple as pie graph
						isStrokePie: { 
							stroke: 20, // Define the stroke of pie graph. It takes number value & default value is 20
							overlayStroke: true, // Define the background stroke within pie graph. It takes boolean value & default value is false
							overlayStrokeColor: '#eee', // Define the background stroke colour within pie graph & default value is #eee (Grey)
							strokeStartEndPoints: 'Yes', // Define the start and end point of pie graph & default value is No
							strokeAnimation: true, // Used for animation. It takes boolean value & default value is true
							strokeAnimationSpeed: 40, // Used for animation speed in miliisecond. It takes number & default value is 20ms
							fontSize: '60px', // Used to define text font size & default value is 60px
							textAlignement: 'center', // Used for position of text within the pie graph & default value is 'center'
							fontFamily: 'Arial', // Define the text font family & the default value is 'Arial'
							fontWeight: 'bold' //  Define the font weight of the text & the default value is 'bold'
						}
					  };
		
		
		
		//Generate myCanvas		
		generatePieGraph('myCanvas', obj);
    generatePieGraph('myCanvas1', obj);
			
	</script>



</body>

</html>