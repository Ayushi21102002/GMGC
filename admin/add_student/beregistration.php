<!DOCTYPE html>
<html lang="en">

<head>

	<script type="text/javascript" src="css/bootstrap-imageupload.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		function getSeater(val) {
			$.ajax({
				type: "POST",
				url: "get_seater.php",
				data: 'roomid=' + val,
				success: function(data) {
					//alert(data);
					$('#seater').val(data);
				}
			});

			$.ajax({
				type: "POST",
				url: "get_seater.php",
				data: 'rid=' + val,
				success: function(data) {
					//alert(data);
					$('#fpm').val(data);
				}
			});
		}
	</script>
</head>

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
					<li class="breadcrumb-item active">Add Record</li>
				</ol>

				<!-- Icon Cards-->
				<div class="row">
					<div class="col-md-12">

						<div class="row">
							<div class="col-md-12">
								<div class="card mb-3">
									<div class="card-header">
										<i class="fas fa-fw fa fa-user"></i> Engineering Student Registration
									</div>
									<div class="card-body">
										<form method="POST" action="" class="form-horizontal" enctype="multipart/form-data">


											<div class="form-group">
												<label class="col-sm-4 control-label">
													<h4 style="color: green" align="left">Admission Related info </h4>
												</label>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Year of Admission :</label>
													<div class="col-md-10">
														<input type="text" name="stu_adm_year" id="stu_adm_year" placeholder="Eg. - 2015 or 2016 ..." class="form-control">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Batch :</label>
													<div class="col-md-10">
														<input type="text" name="stu_adm_batch" id="stu_adm_batch" placeholder="Eg. - 2015 or 2016 ..." class="form-control">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Branch :</label>
													<div class="col-md-10">
														<select name="stu_branch" id="stu_branch" class="form-control" onChange="getSeater(this.value);" onBlur="checkAvailability()" required>
															<option value="">Select Branch</option>
															<option value="ELECTRICAL ENGINEERING"> ELECTRICAL ENGINEERING </option>
															<option value="INFORMATION TECHNOLOGY"> INFORMATION TECHNOLOGY </option>
															<option value="MECHANICAL ENGINEERING"> MECHANICAL ENGINEERING </option>
															<option value="CIVIL ENGINEERING"> CIVIL ENGINEERING </option>
															<option value="COMPUTER ENGINEERING"> COMPUTER ENGINEERING </option>
															<option value="COMPUTER SCIENCE"> COMPUTER SCIENCE </option>
														</select>
														<span id="room-availability-status" style="font-size:12px;"></span>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Roll No : </label>
													<div class="col-md-10">
														<input type="text" name="stu_roll" id="stu_roll" class="form-control" placeholder="Please Enter Roll No. Here" required="required">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Enrollment No : </label>
													<div class="col-md-10">
														<input type="text" name="stu_enrollment" id="stu_enrollment" placeholder="Please Enter Enrollment No. Here" pattern="[0-9A-Za-z]{7,12}" class="form-control" required="required">
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label">
													<h4 style="color: green" align="left">Student Personal Details </h4>
												</label>
											</div>


											<!-- Image Upload Start -->

											<div class="form-group">
												<div class="form-row">
													<label for="form_name" class="col-md-2 control-label">Student Image :</label>
													<div class="col-md-10">
														<div id="wrapper"><input id="fileUpload" name="stu_image" multiple="multiple" type="file" />
															<div id="image-holder"></div>
														</div>
													</div>
												</div>
											</div>
											<!-- Image Upload Start -->


											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">First Name : </label>
													<div class="col-md-10">
														<input type="text" name="stu_fname" id="stu_fname" placeholder="Please Enter Firstname Here" pattern="[a-zA-Z]{3,20}" class="form-control" required="required">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Middle Name : </label>
													<div class="col-md-10">
														<input type="text" name="stu_mname" id="stu_mname" placeholder="Please Enter Middlename Here" pattern="[a-zA-Z]{3,20}" class="form-control">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Last Name : </label>
													<div class="col-md-10">
														<input type="text" name="stu_lname" id="stu_lname" placeholder="Please Enter Lastname Here" pattern="[a-zA-Z]{3,25}" class="form-control" required="required">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Gender : </label>
													<div class="col-md-10">
														<input type="radio" id="stu_gender" name="stu_gender" class="inline-radio" required="required" value="MALE"><span>MALE</span>
														&nbsp;&nbsp;&nbsp;
														<input id="stu_gender" type="radio" name="stu_gender" class="inline-radio" required="required" value="FEMALE"><span>FEMALE</span>
														&nbsp;&nbsp;&nbsp;
														<input id="stu_category" type="radio" name="stu_gender" class="inline-radio" required="required" value="OTHERS"><span>OTHERS</span>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Birthdate: </label>
													<div class="col-md-10">
														<input type="date" name="stu_bdate" id="stu_bdate" class="form-control">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Age :</label>
													<div class="col-md-10">
														<input type="text" name="stu_age" id="stu_age" class="form-control">
													</div>
												</div>
											</div>


											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Category :</label>
													<br />
													<div class="col-md-10">
														<input type="radio" id="stu_category" name="stu_category" class="inline-radio" required="required" value="GENERAL/OPEN">GENERAL/OPEN
														&nbsp;&nbsp;&nbsp;<input id="stu_category" type="radio" name="stu_category" class="inline-radio" required="required" value="SC">SC
														&nbsp;&nbsp;&nbsp;<input id="stu_category" type="radio" name="stu_category" class="inline-radio" required="required" value="SEBC/OBC">SEBC/OBC
														&nbsp;&nbsp;&nbsp;<input id="stu_category" type="radio" name="stu_category" class="inline-radio" required="required" value="ST">ST
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label">
													<h4 style="color: green" align="left">Admission Details </h4>
												</label>
											</div>


											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Admission Category :</label>
													<div class="col-md-10">
														<input type="radio" id="stu_ad_category" name="stu_ad_category" class="inline-radio" required="required" value="Regular">Regular
														&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_ad_category" name="stu_ad_category" class="inline-radio" required="required" value="D2D">D2D
														&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_ad_category" name="stu_ad_category" class="inline-radio" required="required" value="Institute Transfer">Institute Transfer
													</div>
												</div>

											</div>


											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Admission Type :</label>
													<br />
													<div class="col-md-10">
														<input type="radio" id="stu_add_type" name="stu_add_type" class="inline-radio" required="required" value="SQ">SQ
														&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_add_type" name="stu_add_type" required="required" class="inline-radio" value="TFW">TFW
														&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_add_type" name="stu_add_type" required="required" class="inline-radio" value="MQ">MQ
														&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_add_type" name="stu_add_type" required="required" class="inline-radio" value="VQ">VQ
														&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_add_type" name="stu_add_type" required="required" class="inline-radio" value="MQ to SQ">MQ to SQ
														&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_add_type" name="stu_add_type" required="required" class="inline-radio" value="VQ to SQ">VQ to SQ
														&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_add_type" name="stu_add_type" required="required" class="inline-radio" value="Institute Transfer">Institute Transfer
													</div>
												</div>
											</div>



											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">ACPC Admitted Seat :</label>
													<br />
													<div class="col-md-10">
														<input type="radio" id="stu_acpc_adm_seat" name="stu_acpc_adm_seat" class="inline-radio" required="required" value="OPEN">OPEN
														&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_acpc_adm_seat" name="stu_acpc_adm_seat" required="required" class="inline-radio" value="TFW">TFW
														&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_acpc_adm_seat" name="stu_acpc_adm_seat" class="inline-radio" required="required" value="MQ">MQ
														&nbsp;&nbsp;&nbsp;<input type="radio" id="stu_acpc_adm_seat" name="stu_acpc_adm_seat" class="inline-radio" required="required" value="VQ">VQ
													</div>
												</div>
											</div>


											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">GUJCET/JEE Roll NO : </label>
													<div class="col-md-10">
														<input type="text" name="stu_gujcet_roll_no" id="stu_gujcet_roll_no" class="form-control" placeholder="Please Enter GUJCET OR JEE Roll No">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">ACPC Merit Rank : </label>
													<div class="col-md-10">
														<input type="text" name="stu_acpc_merit_rank" id="stu_acpc_merit_rank" class="form-control" placeholder="Please Enter ACPC Merit Rank">
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label">
													<h4 style="color: green" align="left">Temporary Address </h4>
												</label>
											</div>


											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Address : </label>
													<div class="col-md-10">
														<textarea rows="5" name="stu_temp_add" id="stu_temp_add" class="form-control" required="required"></textarea>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">City : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_temp_city" id="stu_temp_city" class="form-control" required="required">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">State :</label>
													<div class="col-md-10">
														<input type="text" name="stu_temp_state" id="stu_temp_state" class="form-control" required="required">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Pincode : </label>
													<div class="col-md-10">
														<input type="text" name="stu_temp_pincode" id="stu_temp_pincode" class="form-control" required="required">
													</div>
												</div>
											</div>

											<div class="form-group">

												<label class="col-md-4 control-label">
													<h4 style="color: green" align="left">Permanent Address </h4>
												</label>

											</div>


											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-5 control-label">Permanent Address same as Temporary
														address : </label>
													<div class="col-sm-4">
														<input type="checkbox" name="adcheck" value="1" />
													</div>
												</div>
											</div>


											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Address : </label>
													<div class="col-md-10">
														<textarea rows="5" name="stu_per_add" id="stu_per_add" class="form-control" required="required"></textarea>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">City : </label>
													<div class="col-md-10">
														<input type="text" name="stu_per_city" id="stu_per_city" class="form-control" required="required">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">State : </label>
													<div class="col-md-10">
														<input type="text" name="stu_per_state" id="stu_per_state" class="form-control" required="required">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Pincode : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_per_pincode" id="stu_per_pincode" class="form-control" required="required">
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-4 control-label">
													<h4 style="color: green" ;align="left">Student Family Details </h4>
												</label>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Parents Contact No : </label>
													<div class="col-md-10">
														<input type="text" name="stu_parents_phone" id="stu_parents_phone" class="form-control" placeholder="Please Enter Parents Contact Number" pattern="[6789][0-9]{9}" required="required">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Student Contact No : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_phone" id="stu_phone" class="form-control" placeholder="Please Enter Student Contact No" pattern="[6789][0-9]{9}" required="required">
													</div>
												</div>
											</div>


											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Father Education : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_father_edu" id="stu_father_edu" placeholder="Please Enter Education Of Father Here" class="form-control">
													</div>
												</div>
											</div>


											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Father Occupation : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_father_occu" id="stu_father_occu" placeholder="Please Enter Occupation of Father Here" class="form-control">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Mother Education : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_mother_edu" id="stu_mother_edu" class="form-control" placeholder="Please Enter Mother Education Here">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Mother Occupation : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_mother_occu" id="stu_mother_occu" class="form-control" placeholder="Please Enter Occupation of Mother Here">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Brother Education : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_brother_edu" id="stu_brother_edu" class="form-control" placeholder="Please Enter Mother Education Here">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label"> Brother Occupation : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_brother_occu" id="stu_brother_occu" class="form-control" placeholder="Please Enter Occupation of Brother Here">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Sister Education: </label>
													<div class="col-sm-10">
														<input type="text" name="stu_sister_edu" id="stu_sister_edu" class="form-control" placeholder="Please Enter Sister Education Here">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Sister Occupation : </label>
													<div class="col-md-10">
														<input type="text" name="stu_sister_occu" id="stu_sister_occu" class="form-control" placeholder="Please Enter Occupation of Sister Here">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Email id : </label>
													<div class="col-md-10">
														<input type="email" name="stu_email" id="stu_email" class="form-control" placeholder="Please Enter Mother Education Here" required="required">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-4 control-label">
														<h4 style="color: green" ;align="left">12th Result Details </h4>
													</label>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-2 control-label">Physics : </label>
													<div class="col-md-10">
														<input type="text" name="stu_phy_mark" id="stu_phy_mark" class="form-control" placeholder="Please Enter Physics Marks Here">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Chemistery : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_che_mark" id="stu_che_mark" class="form-control" placeholder="Please Enter Chemistery Marks Here">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Maths : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_maths_mark" id="stu_maths_mark" class="form-control" placeholder="Please Enter Maths Marks Here">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">12th Medium : </label>
													<div class="col-sm-10">
														<input id="stu_12th_medium" type="radio" name="stu_12th_medium" class="inline-radio" required="required" value="ENGLISH"><span>ENGLISH</span>
														&nbsp;&nbsp;&nbsp;
														<input id="stu_12th_medium" type="radio" name="stu_12th_medium" class="inline-radio" required="required" value="GUJARATI"><span>GUJARATI</span>&nbsp;&nbsp;&nbsp;
														<input id="stu_12th_medium" type="radio" name="stu_12th_medium" class="inline-radio" required="required" value="HINDI"><span>HINDI</span>
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Diploma CGPA : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_dip_CGPA" id="stu_dip_CGPA" class="form-control" placeholder="Please Enter Diploma CGPA Here">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-md-4 control-label">
														<h4 style="color: green" align="left">Barcode Details </h4>
													</label>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Barcode : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_barcode" id="stu_barcode" class="form-control" placeholder="Please Enter Barcode Here">
													</div>
												</div>
											</div>

											<div class="form-group">
												<div class="form-row">
													<label class="col-sm-2 control-label">Member Code : </label>
													<div class="col-sm-10">
														<input type="text" name="stu_mem_code" id="stu_mem_code" class="form-control" placeholder="Please Enter Member code Here">
													</div>
												</div>

											</div>

											<div class="col-sm-6 col-sm-offset-4">
												<div class="form-row">
													<input type="submit" name="submit" value="Register" class="btn btn-primary" />
													<button class="btn btn-danger" style="margin-left: 5px;" type="submit">Cancel</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
	<!-- /.container-fluid -->

	<script type="text/javascript">
		$(document).ready(function() {
			$('input[type="checkbox"]').click(function() {
				if ($(this).prop("checked") == true) {
					$('#stu_per_add').val($('#stu_temp_add').val());
					$('#stu_per_city').val($('#stu_temp_city').val());
					$('#stu_per_state').val($('#stu_temp_state').val());
					$('#stu_per_pincode').val($('#stu_temp_pincode').val());
				}

			});
		});
	</script>
	<script>
		$(document).ready(function() {
			$("#fileUpload").on('change', function() {
				//Get count of selected files
				var countFiles = $(this)[0].files.length;
				var imgPath = $(this)[0].value;
				var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
				var image_holder = $("#image-holder");
				image_holder.empty();
				if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
					if (typeof(FileReader) != "undefined") {
						//loop for each file selected for uploaded.
						for (var i = 0; i < countFiles; i++) {
							var reader = new FileReader();
							reader.onload = function(e) {
								$("<img />", {
									"src": e.target.result,
									"class": "thumb-image"
								}).appendTo(image_holder);
							}
							image_holder.show();
							reader.readAsDataURL($(this)[0].files[i]);
						}
					} else {
						alert("This browser does not support FileReader.");
					}
				} else {
					alert("Pls select only images");
				}
			});
		});
	</script>

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