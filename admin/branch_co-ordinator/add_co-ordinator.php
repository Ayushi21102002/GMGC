<?php
session_start();
include('./../includes/config.php');
include('./../includes/checklogin.php');
// check_login();
//code for add courses
if (isset($_POST['submit'])) {
	$course_fn = strtoupper($_POST['course_fn']);
	$bname = strtoupper($_POST['bname']);
	$f_name = strtoupper($_POST['f_name']);
	$email = strtoupper($_POST['email']);
	$mobile = strtoupper($_POST['mobile']);
	$password = strtoupper($_POST['password']);

	$query = "insert into  branch_cor (course_fn,bname,f_name,email,mobile,password) values(?,?,?,?,?,?)";
	$stmt = $conn->prepare($query);
	$rc = $stmt->bind_param('ssssis', $course_fn, $bname, $f_name, $email, $mobile, $password);
	$result = $stmt->execute();
	if ($result) {
		echo "<script>alert('Branch has been added successfully');
		</script>";
		echo "<script>location.href='http://localhost/aaa/admin/branch_co-ordinator/add_co-ordinator.php';</script>";
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
	<link href="./../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="./../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="./../css/sb-admin.css" rel="stylesheet">

	<link rel="shortcut icon" href="./../images/logo12.png" type="image/x-icon">

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
					<li class="breadcrumb-item active">Add Branch Co-ordinator</li>
				</ol>

				<!-- Icon Cards-->
				<div class="card mb-3">
					<div class="card-header">
						<i class="fas fa-fw fa fa-user"></i> Add Branch Co-ordinator Details
					</div>

					<div class="card-body">
						<?php

						$query = "SELECT course_fn FROM course";
						$result = $conn->query($query);
						if ($result->num_rows > 0) {
							$options = mysqli_fetch_all($result, MYSQLI_ASSOC);
						}

						$query1 = "SELECT bname FROM branch";
						$result1 = $conn->query($query1);
						if ($result1->num_rows > 0) {
							$options1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
						}

						?>
						<form method="post" class="form-horizontal">

							<!-- <div class="hr-dashed"></div> -->
							<div class="form-group">
								<label class="col-sm-2 control-label">Select Course </label>
								<div class="col-sm-8">
									<Select name="course_fn" class="form-control" required>
										<option value=""> - - Select - - </option>

										<?php

										foreach ($options as $option) {

										?>
											<option><?php echo $option['course_fn']; ?></option>

										<?php
										}
										?>
									</Select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Select Branch </label>
								<div class="col-sm-8">
									<Select name="bname" class="form-control" required>
										<option value=""> - - Select - - </option>

										<?php

										foreach ($options1 as $option) {

										?>
											<option><?php echo $option['bname']; ?></option>

										<?php
										}
										?>
									</Select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Faculty Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" name="f_name" id="bcode" value="" required="required">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" name="email" id="email" value="" required="required">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Mobile No.</label>
								<div class="col-sm-8">
									<input type="number" class="form-control" name="mobile" id="mobile" value="" required="required">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Password</label>
								<div class="col-sm-8">
									<input type="password" class="form-control" name="password" id="password" value="" required="required">
								</div>
							</div>

							<div class="col-sm-8 col-sm-offset-2">
								<input class="btn btn-primary" type="submit" name="submit" value="Add Branch ">
							</div>
					</div>

					</form>

				</div>

			</div>



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

</body>

</html>