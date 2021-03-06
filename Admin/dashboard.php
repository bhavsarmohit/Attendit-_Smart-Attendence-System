<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script type="application/javascript" src="../js/rpie.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Attendit Dashboard</title>
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
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />


</head>
<body>
  
  <!-- your code here -->
  <!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">

          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Good Morning, <?php echo $_SESSION["username"]; ?></h3>
            <h6 class="font-weight-normal mb-0"><?php echo date("D,j/m/Y");?></h6>
          </div>
          <div class="col-12 col-xl-4">
           <div class="justify-content-end d-flex">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <i class="mdi mdi-calendar"></i> Select Date
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                <a class="dropdown-item" href="#">January - March</a>
                <a class="dropdown-item" href="#">March - June</a>
                <a class="dropdown-item" href="#">June - August</a>
                <a class="dropdown-item" href="#">August - November</a>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
          <div class="card-people mt-auto">
            <img src="../images/dashboard/people.svg" alt="people">
            <div class="weather-info">
              <div class="d-flex">
                <div>
                  <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                </div>
                <div class="ml-2">
                  <h4 class="location font-weight-normal">Bangalore</h4>
                  <h6 class="font-weight-normal">India</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
     
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Total Teachers</p>
                <p class="fs-30 mb-2">4006</p>
                <p>No. of Teachers</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Total Students</p>
                <p class="fs-30 mb-2">61344</p>
                <p>No. of Students</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">Today's Lecture</p>
                <p class="fs-30 mb-2">34040</p>
                <p>No. of Today's Lectures</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">Toady's Extra Lectures</p>
                <p class="fs-30 mb-2">47033</p>
                <p>No. of Today's Extra Lectures</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Students Present Rate</p>
            <p class="font-weight-500">The total number of students present in 12/12/2025</p>
                <center>
              <canvas id="myCanvas" width="300" height="300"></canvas>
            </center>
          </div>
        </div>
      </div>


      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">All Subjects Attendance</p>
            <p class="font-weight-500">The total number of students percenatge of student upto 12/12/2025</p>
            <center>
              <canvas id="myCanvas1" width="300" height="300"></canvas>                 
            </center>
          </div>
        </div>
      </div>

      
    </div>
   

    

  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ?? 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->




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

