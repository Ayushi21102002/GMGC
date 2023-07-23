<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
// check_login();
//code for add courses
if (isset($_POST['submit'])) {
	$cname = strtoupper($_POST['cname']);
	$bname = strtoupper($_POST['bname']);
	$id = $_GET['id'];
	$query = "update branch set course_fn=?,bname=? where id=?";
	$stmt = $conn->prepare($query);
	$rc = $stmt->bind_param('ssi', $cname, $bname, $id);
	$result = $stmt->execute();
	if ($result) {
		echo "<script>alert('Branch Details has been Updated successfully');</script>";
		echo "<script>location.href='manage-branch.php';</script>";
	} else {
		echo "<script>alert('Error in Branch Insertion');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

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
			<!--<div class="input-group">
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
	<!-- The Modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Modal Heading</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					Are You Sure Want To Logout... ?
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" onclick="window.location.href = '../logout.php';" data-dismiss="modal">Logout</button>
				</div>

			</div>
		</div>
	</div>
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="sidebar navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="./index.php">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa-user"></i>
					<span>Branch Co-ordinator</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown" style="width: 200px; margin-left: 11px;">

					<a class="dropdown-item" href="#" style="margin-left: -12px;">Add Br. Co-ordinator</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#" style="margin-left: -12px;">Manage Br. Co-ordinator</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa-folder"></i>
					<span>Courses</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">

					<a class="dropdown-item" href="./addcourse.php">Add Courses</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="./manage-courses.php">Manage Courses</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa fa-desktop"></i>
					<span>Branch</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">

					<a class="dropdown-item" href="./add-branch.php">Add Branch</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="./manage-branch.php">Manage Branch</a>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa fa-info-circle"></i>
					<span>Inquiry</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">
					<h6 class="dropdown-header">B.E.:</h6>
					<a class="dropdown-item" href="./be_inquiry-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">D2D:</h6>
					<a class="dropdown-item" href="./d2d_inquiry-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Diploma:</h6>
					<a class="dropdown-item" href="./d_inquiry-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Pharmacy:</h6>
					<a class="dropdown-item" href="./bpharm_inquiry-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">BSC:</h6>
					<a class="dropdown-item" href="./bsc_inquiry-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">MCA:</h6>
					<a class="dropdown-item" href="./mca_inquiry-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">PG:</h6>
					<a class="dropdown-item" href="./pg_inquiry-students.php">View Record</a>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa fa-user"></i>
					<span>Add student</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">
					<h6 class="dropdown-header">B.E.:</h6>
					<a class="dropdown-item" href="./beregistration.php">Add Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">D2D:</h6>
					<a class="dropdown-item" href="#">Add Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Diploma:</h6>
					<a class="dropdown-item" href="./diplomaregistration.php">Add Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Pharmacy:</h6>
					<a class="dropdown-item" href="#">Add Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">BSC:</h6>
					<a class="dropdown-item" href="./bscregistration.php">Add Record</a>
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
					<a class="dropdown-item" href="./be_manage-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">D2D:</h6>
					<a class="dropdown-item" href="./d2d_manage-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Diploma:</h6>
					<a class="dropdown-item" href="./d_manage-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Pharmacy:</h6>
					<a class="dropdown-item" href="./bpharm_manage-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">BSC:</h6>
					<a class="dropdown-item" href="./bsc_manage-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">MCA:</h6>
					<a class="dropdown-item" href="./mca_manage-students.php">View Record</a>
					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">PG:</h6>
					<a class="dropdown-item" href="./pg_manage-students.php">View Record</a>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa-fa fa-bookmark"></i>
					<span>Scholarship</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">

					<a class="dropdown-item" href="./mysy.php">MYSY</a>
					<div class="dropdown-divider"></div>

					<a class="dropdown-item" href="./digital.php">Digital Gujarat</a>

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
			<li class="nav-item">
				<a class="nav-link" href="charts.html">
					<i class="fas fa-fw fa-fa fa-book"></i>
					<span>Documents</span></a>
			</li>

		</ul>

		<div id="content-wrapper">
			<div class="container-fluid">
				<!-- Breadcrumbs-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Dashboard</a>
					</li>
					<li class="breadcrumb-item active">Edit Branch</li>
				</ol>

				<!-- Icon Cards-->
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-chart-area"></i> Edit Branch Details
					</div>

					<div class="card-body">
						<form method="post" class="form-horizontal">
							<?php
							$id = $_GET['id'];

							$ret = "select * from branch where id='$id'";
							/*	$stmt= $conn->prepare($ret) ;
	 $stmt->bind_param('i',$id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())*/
							$result = mysqli_query($conn, $ret) or die(mysqli_error($conn));


							while ($row = mysqli_fetch_array($result)) {
							?>
								<div class="hr-dashed"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Course Name </label>
									<div class="col-sm-8">
										<input type="text" name="cname" value="<?php echo $row['course_fn']; ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Branch Code</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="bcode" id="bcode" value="<?php echo $row['bcode']; ?>" disabled>
										<span class="help-block m-b-none">
											Branch Code can't be changed.</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Branch Name </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="bname" value="<?php echo $row['bname']; ?>">
									</div>
								</div>


							<?php } ?>
							<div class="col-sm-8 col-sm-offset-2">

								<input class="btn btn-primary" type="submit" name="submit" value="Update Branch Details ">
							</div>
					</div>

					</form>

				</div>

			</div>



		</div>
	</div>
	<!-- /.container-fluid -->
	<!-- Sticky Footer -->
	<footer class="sticky-footer">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span>Copyright © Student Section 2022</span>
			</div>
		</div>
	</footer>

	</div>
	<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="./vendor/jquery/jquery.min.js"></script>
	<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Page level plugin JavaScript-->
	<script src="./vendor/chart.js/Chart.min.js"></script>
	<script src="./vendor/datatables/jquery.dataTables.js"></script>
	<script src="./vendor/datatables/dataTables.bootstrap4.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="./js/sb-admin.min.js"></script>

	<!-- Demo scripts for this page-->
	<script src="./js/demo/datatables-demo.js"></script>
	<script src="./js/demo/chart-area-demo.js"></script>

</body>

</html>