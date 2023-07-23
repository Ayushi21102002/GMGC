<?php
ini_set('session.cache_limiter', 'private');
session_cache_limiter(false);
session_start();
include('./../includes/config.php');
include('./../includes/checklogin.php');
// check_login();

if (isset($_GET['del'])) {
	$id = intval($_GET['del']);
	$branch = $_GET['branch'];
	if ($branch == "CIVIL ENGINEERING") {
		$sel = "delete from civil_student_detail where Stu_Student_Enrollment_No=?";
	} elseif ($branch == "COMPUTER ENGINEERING") {
		$sel = "delete from ce_student_detail where Stu_Student_Enrollment_No=?";
	} elseif ($branch == "MECHANICAL ENGINEERING") {
		$sel = "delete from me_student_detail where Stu_Student_Enrollment_No=?";
	} elseif ($branch == "ELECTRICAL ENGINEERING") {
		$sel = "delete from ee_student_detail where Stu_Student_Enrollment_No=?";
	} elseif ($branch == "INFORMATION TECHNOLOGY") {
		$sel = "delete from it_student_detail where Stu_Student_Enrollment_No=?";
	} else {
		echo "No Data found";
	}

	$stmt = $conn->prepare($sel);
	$stmt->bind_param('i', $id);
	$stmt->execute();
	$stmt->close();
	echo "<script>alert('Data Deleted Successfully');</script>";
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
	<link href="./../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="./../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="./../css/sb-admin.css" rel="stylesheet">

	<link rel="shortcut icon" href="./../images/logo12.png" type="image/x-icon">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

</head>

<body id="page-top">

	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

		<a class="navbar-brand mr-1" href="./../index.php">SS | Admin Area</a>

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
					<button type="button" class="btn btn-danger" onclick="window.location.href = './../login/logout.php';" data-dismiss="modal">Logout</button>
				</div>

			</div>
		</div>
	</div>
	<div id="wrapper">

		<!-- Sidebar -->
		<?php
		include('./../includes/sidebar.php');
		?>
		
		<div id="content-wrapper">
			<div class="container-fluid">
				<!-- Breadcrumbs-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="./../index.php">Dashboard</a>
					</li>
					<li class="breadcrumb-item active">View Record</li>
				</ol>

				<!-- Icon Cards-->
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-fw fa fa-user"></i> Students Option to View Data
					</div>
					<form action="" method="POST">
						<div class="card-body">
							<div class="form-group">
								<div class="form-row">
									<div class="col-md-4">
										<div class="form-label-group">
											<select name="batch" class="form-control" style="color:black; border-color:#325d88; border-width:1px" required>
												<option value=''>Batch</option>
												<option value='2015'>2015</option>
												<option value='2016'>2016</option>
												<option value='2017'>2017</option>
												<option value='2018'>2018</option>
												<option value='2019'>2019</option>
												<option value='2020'>2020</option>
												<option value='2021'>2021</option>
												<option value='2021'>2022</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-label-group">
											<select name="branch" class="form-control" style="color:black; border-color:#325d88; border-width:1px" required>
												<option value="">Branch</option>
												<option value="CIVIL ENGINEERING">06 Civil Engineering</option>
												<option value="COMPUTER ENGINEERING">07 Computer Engineering</option>
												<option value="ELECTRICAL ENGINEERING">09 Electrical Engineering</option>
												<option value="INFORMATION TECHNOLOGY">16 Information Technology</option>
												<option value="MECHANICAL ENGINEERING">19 Mechanical Engineering</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<input type="submit" name="go" value="Go" class="btn btn-primary btn-block" id="export" style="float:center" />
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<br />

				<!-- DataTables Example -->
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-table"></i>
						View Post Graduation Student Data
					</div>
					<div class="card-body">
						<div class="table-responsive">
						<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sr.No</th>
										<th>Photo</th>
										<th>En.No</th>
										<th>Name</th>
										<th>Mobile</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</thead>
								
								<tbody>
									<?php
									//$conn = mysqli_connect("localhost","root","","masterdata2");
									if (isset($_POST['go'])) {
										$batch = $_POST['batch'];
										$branch = $_POST['branch'];
										if ($branch == "CIVIL ENGINEERING") {
											$sel = "select * from civil_student_detail where Stu_Batch='$batch'";
										} elseif ($branch == "COMPUTER ENGINEERING") {
											$sel = "select * from ce_student_detail where Stu_Batch='$batch'";
										} elseif ($branch == "MECHANICAL ENGINEERING") {
											$sel = "select * from me_student_detail where Stu_Batch='$batch'";
										} elseif ($branch == "ELECTRICAL ENGINEERING") {
											$sel = "select * from ee_student_detail where Stu_Batch='$batch'";
										} elseif ($branch == "INFORMATION TECHNOLOGY") {
											$sel = "select * from it_student_detail where Stu_Batch='$batch'";
										} else {
											echo "No Data found";
										}
										if ($sel) {
											$result = mysqli_query($conn, $sel) or die(mysqli_error($conn));
											while ($row = mysqli_fetch_array($result)) {
												$a = $row['Sr_No'];
												$b = $row['Stu_Batch'];
												$i = $row['Stu_Profile_Pic'];
												$c = $row['Stu_Student_Enrollment_No'];
												$d = $row['Stu_Firstname'];
												$e = $row['Stu_Middlename'];
												$f = $row['Stu_Lastname'];
												$g = $row['Stu_Student_Phone_No'];
												$h = $row['Stu_Email'];
												$j = $row['Stu_gender'];
												$k = $row['Stu_Branch'];
									?>

												<tr>
													<td><?php echo $a; ?></td>
													<td><?php echo "<div class='col-lm-4'><img src='../student-images/$i.jpg' class='img-responsive img-thumbnail'/></div>"; ?>
													</td>
													<td><?php echo $c; ?></td>
													<td><?php echo $d . " " . $e . " " . $f; ?></td>
													<td><?php echo $g; ?></td>
													<td><?php echo $h; ?></td>
													<td>
														<a href="basic-profile.php?id=<?php echo $c; ?>& branch=<?php echo $k; ?>" title="View Full Details"><i class="fa fa-desktop"></i></a>&nbsp;&nbsp;
														<a href="be_edit-students.php?id=<?php echo $c; ?>& branch=<?php echo $k; ?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
														<a href="be_manage-students.php?del=<?php echo $c; ?>& branch=<?php echo $k; ?>" title="Delete Record" onclick="retcloseurn confirm('Do you want to delete');"><i class="fa fa-user-times"></i></a>
													</td>
												</tr>
									<?php
											}
										} else {
											echo "No Data Found | Select Other Option";
										}
									}

									?>
								</tbody>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
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
	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Page level plugin JavaScript-->
	<script src="../vendor/chart.js/Chart.min.js"></script>
	<script src="../vendor/datatables/jquery.dataTables.js"></script>
	<script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="../js/sb-admin.min.js"></script>

	<!-- Demo scripts for this page-->
	<script src="../js/demo/datatables-demo.js"></script>
	<script src="../js/demo/chart-area-demo.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>

</body>

</html>