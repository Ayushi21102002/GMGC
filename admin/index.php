<?php
ini_set('session.cache_limiter', 'private');
session_cache_limiter(false);
session_start();
include('./includes/config.php');
// include('./includes/checklogin.php');
// check_login();
?>
<html oncontextmenu="return false">

<head>

	<link rel="shortcut icon" href="./images/logo12.png" type="image/x-icon">

	<title>SB Admin - Dashboard</title>

	<!-- Custom fonts for this template-->
	<link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="./vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="./css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

		<a class="navbar-brand mr-1" href="./index.php">SS | Admin Area</a>

		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
			<i class="fas fa-bars"></i>
		</button>

		<!-- Navbar Search -->
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			<!-- <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div> -->
		</form>

		<!-- Navbar -->

		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user-circle fa-fw"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

					<a class="dropdown-item" href="./logout.php" data-toggle="modal" data-target="#myModal">Logout</a>
				</div>
			</li>
		</ul>

	</nav>

	<!-- The Logout Modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Logout</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					Are You Sure Want To Logout... ?
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" onclick="window.location.href = './login/logout.php';" data-dismiss="modal">Logout</button>
				</div>

			</div>
		</div>
	</div>

	<div id="wrapper">

		<!-- Sidebar -->

		<?php

			include('./includes/sidebar.php');

		?>
		<!-- <ul class="sidebar navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="./index.php">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa-folder"></i>
					<span>Courses</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">

					<a class="dropdown-item" href="./course/add-course.php">Add Courses</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="./course/manage-courses.php">Manage Courses</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa fa-desktop"></i>
					<span>Branch</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">

					<a class="dropdown-item" href="./branch/add-branch.php">Add Branch</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="./branch/manage-branch.php">Manage Branch</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa-user"></i>
					<span>Branch Co-ordinator</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown" style="width: 200px; margin-left: 11px;">
					<a class="dropdown-item" href="./branch_co-ordinator/add_co-ordinator.php">Add Br. Co-ordinator</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" id="branch_co-ordinator" href="./branch_co-ordinator/manage_co-ordinator.php">Manage Br. Co-ordinator</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa fa-info-circle"></i>
					<span>Admission Details</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">
					<h6 class="dropdown-header">B.E.:</h6>
					<a class="dropdown-item" href="./inquiry/display/be_inquiry-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">D2D:</h6>
					<a class="dropdown-item" href="./inquiry/display/d2d_inquiry-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Diploma:</h6>
					<a class="dropdown-item" href="./inquiry/display/d_inquiry-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Pharmacy:</h6>
					<a class="dropdown-item" href="./inquiry/display/bpharm_inquiry-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">BSC:</h6>
					<a class="dropdown-item" href="./inquiry/display/bsc_inquiry-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">MCA:</h6>
					<a class="dropdown-item" href="./inquiry/display/mca_inquiry-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">PG:</h6>
					<a class="dropdown-item" href="./inquiry/display/pg_inquiry-students.php">View Record</a>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa fa-user"></i>
					<span>Add student</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">
					<h6 class="dropdown-header">B.E.:</h6>
					<a class="dropdown-item" href="./add_student/beregistration.php">Add Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">D2D:</h6>
					<a class="dropdown-item" href="#">Add Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Diploma:</h6>
					<a class="dropdown-item" href="./add_student/diplomaregistration.php">Add Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Pharmacy:</h6>
					<a class="dropdown-item" href="#">Add Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">BSC:</h6>
					<a class="dropdown-item" href="./add_student/bscregistration.php">Add Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">MCA:</h6>
					<a class="dropdown-item" href="#">Add Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">PG:</h6>
					<a class="dropdown-item" href="#">Add Record</a>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa fa-eye"></i>
					<span>View student</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">
					<h6 class="dropdown-header">B.E.:</h6>
					<a class="dropdown-item" href="./view_student/be_manage-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">D2D:</h6>
					<a class="dropdown-item" href="./view_student/d2d_manage-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Diploma:</h6>
					<a class="dropdown-item" href="./view_student/d_manage-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Pharmacy:</h6>
					<a class="dropdown-item" href="./view_student/bpharm_manage-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">BSC:</h6>
					<a class="dropdown-item" href="./view_student/bsc_manage-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">MCA:</h6>
					<a class="dropdown-item" href="./view_student/mca_manage-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">PG:</h6>
					<a class="dropdown-item" href="./view_student/pg_manage-students.php">View Record</a>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa-fa fa-bookmark"></i>
					<span>Scholarship</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">

					<a class="dropdown-item" href="./scholarship/mysy.php">MYSY</a>
					<div class="dropdown-divider"></div>

					<a class="dropdown-item" href="./scholarship/digital.php">Digital Gujarat</a>

			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa-fa fa-list-alt"></i>
					<span>Result</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">

					<a class="dropdown-item" href="manage-students.php">Upload Data</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="404.html">Enter issue date</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="manage-students.php">View Result Record</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa-fa fa-users"></i>
					<span>Fees</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">

					<a class="dropdown-item" href="manage-students.php">Add Fees</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="404.html">Enter dates here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="manage-students.php">View Fees Record</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa-fa fa-book"></i>
					<span>Documents</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">

					<a class="dropdown-item" href="./documents/provisional_ver_display.php">Provisional Verification</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="./documents/migration_cer_display.php">Migration Certificate</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="./documents/language_cer_display.php">Language Certificate</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Duplicate Grade Sheet</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">CGPA to Percentage</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Attempt Certificate</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="./documents/fees_structure_display.php">Fees Structure</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Bonafide Certificate</a>
			</li>

		</ul> -->
		<div id="content-wrapper">

			<div class="container-fluid">

				<!-- Breadcrumbs-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="./index.php">Dashboard</a>
					</li>
					<li class="breadcrumb-item active">Overview</li>
				</ol>

				<!-- Icon Cards-->
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-chart-area"></i> Students Statistics
					</div>
					<form action="" method="POST">
						<div class="card-body">
							<div class="form-group">
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-label-group">
											<select name="batch" class="form-control" style="color:black; border-color:#325d88; border-width:2px;" required="required">
												<option value="">Batch</option>
												<option value="2015">2015</option>
												<option value="2016">2016</option>
												<option value="2017">2017</option>
												<option value="2018">2018</option>
												<option value="2019">2019</option>
												<option value="2019">2020</option>
												<option value="2019">2021</option>
												<option value="2019">2022</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<input type="submit" name="go" value="Go" class="btn btn-primary btn-block" id="export" style="float:center" />
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="row">
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-primary o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-comments"></i>
								</div>
								<div class="mr-5">Computer Engineering</div>
							</div>

							<?php
							// $con = mysqli_connect("localhost", "root", "", "gmgc");
							include('./includes/config.php');

							if (isset($_POST['go'])) {
								$betch = $_POST['batch'];

								if ($betch == 2015) {
									$q = "select * from ce_student_detail where Stu_Batch = '$betch'";
									$r = mysqli_query($conn, $q);
									$row = mysqli_num_rows($r);
									echo "Total Student :" . $row . "<br/>";

									$a = "select * from ce_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r2 = mysqli_query($conn, $a);
									$row2 = mysqli_num_rows($r2);
									echo "Male :" . $row2 . "<br/>";

									$b = "select * from ce_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r3 = mysqli_query($conn, $b);
									$row3 = mysqli_num_rows($r3);
									echo "Female :" . $row3 . "<br/>";
								}
								if ($betch == 2016) {
									$q1 = "select * from ce_student_detail where Stu_Batch = '$betch'";
									$r1 = mysqli_query($conn, $q1);
									$row1 = mysqli_num_rows($r1);
									echo "Total Student :" . $row1 . "<br/>";

									$a5 = "select * from ce_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r5 = mysqli_query($conn, $a5);
									$row5 = mysqli_num_rows($r5);
									echo "Male :" . $row5 . "<br/>";

									$b6 = "select * from ce_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r6 = mysqli_query($conn, $b6);
									$row6 = mysqli_num_rows($r6);
									echo "Female :" . $row6 . "<br/>";
								}
								if ($betch == 2017) {
									$q7 = "select * from ce_student_detail where Stu_Batch = '$betch'";
									$r7 = mysqli_query($conn, $q7);
									$row7 = mysqli_num_rows($r7);
									echo "Total Student :" . $row7 . "<br/>";

									$a8 = "select * from ce_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r8 = mysqli_query($conn, $a8);
									$row8 = mysqli_num_rows($r8);
									echo "Male :" . $row8 . "<br/>";

									$b9 = "select * from ce_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r9 = mysqli_query($conn, $b9);
									$row9 = mysqli_num_rows($r9);
									echo "Female :" . $row9 . "<br/>";
								}
								if ($betch == 2018) {
									$q10 = "select * from ce_student_detail where Stu_Batch = '$betch'";
									$r10 = mysqli_query($conn, $q10);
									$row10 = mysqli_num_rows($r10);
									echo "Total Student :" . $row10 . "<br/>";

									$a11 = "select * from ce_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r11 = mysqli_query($conn, $a11);
									$row11 = mysqli_num_rows($r11);
									echo "Male :" . $row11 . "<br/>";

									$b12 = "select * from ce_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r12 = mysqli_query($conn, $b12);
									$row12 = mysqli_num_rows($r12);
									echo "Female :" . $row12 . "<br/>";
								}
								if ($betch == 2019) {
									$q13 = "select * from ce_student_detail where Stu_Batch = '$betch'";
									$r13 = mysqli_query($conn, $q13);
									$row13 = mysqli_num_rows($r13);
									echo "Total Student :" . $row13 . "<br/>";

									$a14 = "select * from ce_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r14 = mysqli_query($conn, $a14);
									$row14 = mysqli_num_rows($r14);
									echo "Male :" . $row14 . "<br/>";

									$b15 = "select * from ce_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r15 = mysqli_query($conn, $b15);
									$row15 = mysqli_num_rows($r15);
									echo "Female :" . $row15 . "<br/>";
								}
							}
							?>
							<a class="card-footer text-white clearfix small z-1" href="./be_manage-students.php">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-danger o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-life-ring"></i>
								</div>
								<div class="mr-5">Mechanical Engineering</div>
							</div>
							<?php
							$con = mysqli_connect("localhost", "root", "", "gmgc");

							if (isset($_POST['go'])) {
								$betch = $_POST['batch'];

								if ($betch == 2015) {
									$q = "select * from me_student_detail where Stu_Batch = '$betch'";
									$r = mysqli_query($con, $q);
									$row = mysqli_num_rows($r);
									echo "Total Student :" . $row . "<br/>";

									$a = "select * from me_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r2 = mysqli_query($con, $a);
									$row2 = mysqli_num_rows($r2);
									echo "Male :" . $row2 . "<br/>";

									$b = "select * from me_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r3 = mysqli_query($con, $b);
									$row3 = mysqli_num_rows($r3);
									echo "Female :" . $row3 . "<br/>";
								}
								if ($betch == 2016) {
									$q1 = "select * from me_student_detail where Stu_Batch = '$betch'";
									$r1 = mysqli_query($con, $q1);
									$row1 = mysqli_num_rows($r1);
									echo "Total Student :" . $row1 . "<br/>";

									$a5 = "select * from me_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r5 = mysqli_query($con, $a5);
									$row5 = mysqli_num_rows($r5);
									echo "Male :" . $row5 . "<br/>";

									$b6 = "select * from me_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r6 = mysqli_query($con, $b6);
									$row6 = mysqli_num_rows($r6);
									echo "Female :" . $row6 . "<br/>";
								}
								if ($betch == 2017) {
									$q7 = "select * from me_student_detail where Stu_Batch = '$betch'";
									$r7 = mysqli_query($con, $q7);
									$row7 = mysqli_num_rows($r7);
									echo "Total Student :" . $row7 . "<br/>";

									$a8 = "select * from me_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r8 = mysqli_query($con, $a8);
									$row8 = mysqli_num_rows($r8);
									echo "Male :" . $row8 . "<br/>";

									$b9 = "select * from me_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r9 = mysqli_query($con, $b9);
									$row9 = mysqli_num_rows($r9);
									echo "Female :" . $row9 . "<br/>";
								}
								if ($betch == 2018) {
									$q10 = "select * from me_student_detail where Stu_Batch = '$betch'";
									$r10 = mysqli_query($con, $q10);
									$row10 = mysqli_num_rows($r10);
									echo "Total Student :" . $row10 . "<br/>";

									$a11 = "select * from me_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r11 = mysqli_query($con, $a11);
									$row11 = mysqli_num_rows($r11);
									echo "Male :" . $row11 . "<br/>";

									$b12 = "select * from me_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r12 = mysqli_query($con, $b12);
									$row12 = mysqli_num_rows($r12);
									echo "Female :" . $row12 . "<br/>";
								}
								if ($betch == 2019) {
									$q13 = "select * from me_student_detail where Stu_Batch = '$betch'";
									$r13 = mysqli_query($con, $q13);
									$row13 = mysqli_num_rows($r13);
									echo "Total Student :" . $row13 . "<br/>";

									$a14 = "select * from me_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r14 = mysqli_query($con, $a14);
									$row14 = mysqli_num_rows($r14);
									echo "Male :" . $row14 . "<br/>";

									$b15 = "select * from me_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r15 = mysqli_query($con, $b15);
									$row15 = mysqli_num_rows($r15);
									echo "Female :" . $row15 . "<br/>";
								}
							}
							?>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-warning o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-list"></i>
								</div>
								<div class="mr-5">Civil Engineering</div>
							</div>
							<?php
							$con = mysqli_connect("localhost", "root", "", "gmgc");

							if (isset($_POST['go'])) {
								$betch = $_POST['batch'];

								if ($betch ==  2015) {
									$q = "select * from civil_student_detail where Stu_Batch = '$betch'";
									$r = mysqli_query($con, $q);
									$row = mysqli_num_rows($r);
									echo "Total Student :" . $row . "<br/>";

									$a = "select * from civil_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r2 = mysqli_query($con, $a);
									$row2 = mysqli_num_rows($r2);
									echo "Male :" . $row2 . "<br/>";

									$b = "select * from civil_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r3 = mysqli_query($con, $b);
									$row3 = mysqli_num_rows($r3);
									echo "Female :" . $row3 . "<br/>";
								}
								if ($betch == 2016) {
									$q1 = "select * from civil_student_detail where Stu_Batch = '$betch'";
									$r1 = mysqli_query($con, $q1);
									$row1 = mysqli_num_rows($r1);
									echo "Total Student :" . $row1 . "<br/>";

									$a5 = "select * from civil_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r5 = mysqli_query($con, $a5);
									$row5 = mysqli_num_rows($r5);
									echo "Male :" . $row5 . "<br/>";

									$b6 = "select * from civil_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r6 = mysqli_query($con, $b6);
									$row6 = mysqli_num_rows($r6);
									echo "Female :" . $row6 . "<br/>";
								}
								if ($betch == 2017) {
									$q7 = "select * from civil_student_detail where Stu_Batch = '$betch'";
									$r7 = mysqli_query($con, $q7);
									$row7 = mysqli_num_rows($r7);
									echo "Total Student :" . $row7 . "<br/>";

									$a8 = "select * from civil_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r8 = mysqli_query($con, $a8);
									$row8 = mysqli_num_rows($r8);
									echo "Male :" . $row8 . "<br/>";

									$b9 = "select * from civil_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r9 = mysqli_query($con, $b9);
									$row9 = mysqli_num_rows($r9);
									echo "Female :" . $row9 . "<br/>";
								}
								if ($betch == 2018) {
									$q10 = "select * from civil_student_detail where Stu_Batch = '$betch'";
									$r10 = mysqli_query($con, $q10);
									$row10 = mysqli_num_rows($r10);
									echo "Total Student :" . $row10 . "<br/>";

									$a11 = "select * from civil_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r11 = mysqli_query($con, $a11);
									$row11 = mysqli_num_rows($r11);
									echo "Male :" . $row11 . "<br/>";

									$b12 = "select * from civil_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r12 = mysqli_query($con, $b12);
									$row12 = mysqli_num_rows($r12);
									echo "Female :" . $row12 . "<br/>";
								}
								if ($betch == 2019) {
									$q13 = "select * from civil_student_detail where Stu_Batch = '$betch'";
									$r13 = mysqli_query($con, $q13);
									$row13 = mysqli_num_rows($r13);
									echo "Total Student :" . $row13 . "<br/>";

									$a14 = "select * from civil_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r14 = mysqli_query($con, $a14);
									$row14 = mysqli_num_rows($r14);
									echo "Male :" . $row14 . "<br/>";

									$b15 = "select * from civil_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r15 = mysqli_query($con, $b15);
									$row15 = mysqli_num_rows($r15);
									echo "Female :" . $row15 . "<br/>";
								}
							}
							?>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>


					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-success o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-shopping-cart"></i>
								</div>
								<div class="mr-5">Information Technology</div>
							</div>
							<?php
							$con = mysqli_connect("localhost", "root", "", "gmgc");

							if (isset($_POST['go'])) {
								$betch = $_POST['batch'];

								if ($betch == 2015) {
									$q = "select * from it_student_detail where Stu_Batch = '$betch'";
									$r = mysqli_query($con, $q);
									$row = mysqli_num_rows($r);
									echo "Total Student :" . $row . "<br/>";

									$a = "select * from it_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r2 = mysqli_query($con, $a);
									$row2 = mysqli_num_rows($r2);
									echo "Male :" . $row2 . "<br/>";

									$b = "select * from it_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r3 = mysqli_query($con, $b);
									$row3 = mysqli_num_rows($r3);
									echo "Female :" . $row3 . "<br/>";
								}
								if ($betch == 2016) {
									$q1 = "select * from it_student_detail where Stu_Batch = '$betch'";
									$r1 = mysqli_query($con, $q1);
									$row1 = mysqli_num_rows($r1);
									echo "Total Student :" . $row1 . "<br/>";

									$a5 = "select * from it_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r5 = mysqli_query($con, $a5);
									$row5 = mysqli_num_rows($r5);
									echo "Male :" . $row5 . "<br/>";

									$b6 = "select * from it_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r6 = mysqli_query($con, $b6);
									$row6 = mysqli_num_rows($r6);
									echo "Female :" . $row6 . "<br/>";
								}
								if ($betch == 2017) {
									$q7 = "select * from it_student_detail where Stu_Batch = '$betch'";
									$r7 = mysqli_query($con, $q7);
									$row7 = mysqli_num_rows($r7);
									echo "Total Student :" . $row7 . "<br/>";

									$a8 = "select * from it_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r8 = mysqli_query($con, $a8);
									$row8 = mysqli_num_rows($r8);
									echo "Male :" . $row8 . "<br/>";

									$b9 = "select * from it_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r9 = mysqli_query($con, $b9);
									$row9 = mysqli_num_rows($r9);
									echo "Female :" . $row9 . "<br/>";
								}
								if ($betch == 2018) {
									$q10 = "select * from it_student_detail where Stu_Batch = '$betch'";
									$r10 = mysqli_query($con, $q10);
									$row10 = mysqli_num_rows($r10);
									echo "Total Student :" . $row10 . "<br/>";

									$a11 = "select * from it_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r11 = mysqli_query($con, $a11);
									$row11 = mysqli_num_rows($r11);
									echo "Male :" . $row11 . "<br/>";

									$b12 = "select * from it_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r12 = mysqli_query($con, $b12);
									$row12 = mysqli_num_rows($r12);
									echo "Female :" . $row12 . "<br/>";
								}
								if ($betch == 2019) {
									$q13 = "select * from it_student_detail where Stu_Batch = '$betch'";
									$r13 = mysqli_query($con, $q13);
									$row13 = mysqli_num_rows($r13);
									echo "Total Student :" . $row13 . "<br/>";

									$a14 = "select * from it_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r14 = mysqli_query($con, $a14);
									$row14 = mysqli_num_rows($r14);
									echo "Male :" . $row14 . "<br/>";

									$b15 = "select * from it_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r15 = mysqli_query($con, $b15);
									$row15 = mysqli_num_rows($r15);
									echo "Female :" . $row15 . "<br/>";
								}
							}
							?>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white bg-info o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-list"></i>
								</div>
								<div class="mr-5">Electrical Engineering</div>
							</div>
							<?php
							// $con = mysqli_connect("localhost", "root", "", "gmgc");
							include('./includes/config.php');

							if (isset($_POST['go'])) {
								$betch = $_POST['batch'];

								if ($betch == 2015) {
									$q = "select * from ee_student_detail where Stu_Batch = '$betch'";
									$r = mysqli_query($con, $q);
									$row = mysqli_num_rows($r);
									echo "Total Student :" . $row . "<br/>";

									$a = "select * from ee_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r2 = mysqli_query($con, $a);
									$row2 = mysqli_num_rows($r2);
									echo "Male :" . $row2 . "<br/>";

									$b = "select * from ee_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r3 = mysqli_query($con, $b);
									$row3 = mysqli_num_rows($r3);
									echo "Female :" . $row3 . "<br/>";
								}
								if ($betch == 2016) {
									$q1 = "select * from ee_student_detail where Stu_Batch = '$betch'";
									$r1 = mysqli_query($con, $q1);
									$row1 = mysqli_num_rows($r1);
									echo "Total Student :" . $row1 . "<br/>";

									$a5 = "select * from ee_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r5 = mysqli_query($con, $a5);
									$row5 = mysqli_num_rows($r5);
									echo "Male :" . $row5 . "<br/>";

									$b6 = "select * from ee_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r6 = mysqli_query($con, $b6);
									$row6 = mysqli_num_rows($r6);
									echo "Female :" . $row6 . "<br/>";
								}
								if ($betch == 2017) {
									$q7 = "select * from ee_student_detail where Stu_Batch = '$betch'";
									$r7 = mysqli_query($con, $q7);
									$row7 = mysqli_num_rows($r7);
									echo "Total Student :" . $row7 . "<br/>";

									$a8 = "select * from ee_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r8 = mysqli_query($con, $a8);
									$row8 = mysqli_num_rows($r8);
									echo "Male :" . $row8 . "<br/>";

									$b9 = "select * from ee_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r9 = mysqli_query($con, $b9);
									$row9 = mysqli_num_rows($r9);
									echo "Female :" . $row9 . "<br/>";
								}
								if ($betch == 2018) {
									$q10 = "select * from ee_student_detail where Stu_Batch = '$betch'";
									$r10 = mysqli_query($con, $q10);
									$row10 = mysqli_num_rows($r10);
									echo "Total Student :" . $row10 . "<br/>";

									$a11 = "select * from ee_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r11 = mysqli_query($con, $a11);
									$row11 = mysqli_num_rows($r11);
									echo "Male :" . $row11 . "<br/>";

									$b12 = "select * from ee_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r12 = mysqli_query($con, $b12);
									$row12 = mysqli_num_rows($r12);
									echo "Female :" . $row12 . "<br/>";
								}
								if ($betch == 2019) {
									$q13 = "select * from ee_student_detail where Stu_Batch = '$betch'";
									$r13 = mysqli_query($con, $q13);
									$row13 = mysqli_num_rows($r13);
									echo "Total Student :" . $row13 . "<br/>";

									$a14 = "select * from ee_student_detail where Stu_Batch = '$betch' and Stu_gender ='MALE' ";
									$r14 = mysqli_query($con, $a14);
									$row14 = mysqli_num_rows($r14);
									echo "Male :" . $row14 . "<br/>";

									$b15 = "select * from ee_student_detail where Stu_Batch = '$betch' and Stu_gender ='FEMALE' ";
									$r15 = mysqli_query($con, $b15);
									$row15 = mysqli_num_rows($r15);
									echo "Female :" . $row15 . "<br/>";
								}
							}
							?>
							<a class="card-footer text-white clearfix small z-1" href="#">
								<span class="float-left">View Details</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
				</div>

			</div>

		</div>
		<!-- /.Container-fluid -->

		<!-- Sticky Footer -->
		<footer class="sticky-footer">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright © Student Section 2022</span>
				</div>
			</div>
		</footer>

	</div>
	<!-- /.Wrapper -->

	<!-- Scroll to Top Button-->
	<!-- <a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i> -->
	</a>

	<!-- Logout Modal-->
	<!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="login.html">Logout</a>
				</div>
			</div>
		</div>
	</div> -->

</body>

<?php
include('./includes/js_all.php');
?>

</html>