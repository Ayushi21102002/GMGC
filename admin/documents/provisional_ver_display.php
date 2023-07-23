<?php session_start();
include('./back/config3.php');
include('./../includes/checklogin.php');
// check_login();


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
                    <li class="breadcrumb-item active">PROVISIONAL VERIFICATION</li>
                </ol>

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

                <!-- Icon Cards-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-fw fa fa-desktop"></i> Provisional Certificate Verification
                    </div>

                    <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                                <tr>
                                    <th>Srno.</th>
                                    <th>Student Name</th>
                                    <th>Er_no.</th>
                                    <th>Branch</th>
                                    <th>Semester</th>
                                    <th>Id proof</th>
                                    <th>Provisional</th>
                                    <th>Status</th>
                                    <!-- <th>Reason</th> -->
                                    <th>Action</th>
                                    <th>Requested date</th>
                                    <th>Approved date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $cmd = "SELECT * FROM provisional_ver";
                                $sno = 0;
                                $result = mysqli_query($conn, $cmd);
                                while ($row = mysqli_fetch_array($result)) {
                                    $name = $row['name'];
                                    $er_no = $row['enrollment'];
                                    $branch = $row['branch'];
                                    $id_proof = $row['id_proof'];
                                    $provisional = $row['provisional'];
                                    $status = $row['status'];
                                    $req_date = $row['req_date'];
                                    $sem = $row['sem'];
                                    // $_SESSION['enrollment'] = $er_no;
                                    $app_date = $row['app_date'];
                                ?>
                                   <tr>
                                        <td style="display: none;">$g;</td>
                                        <td><?php echo $sno = $sno + 1; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $er_no; ?></td>
                                        <td><?php echo $branch; ?></td>
                                        <td><?php echo $sem; ?></td>
                                        <!-- <td><?php echo $status; ?></td> -->
                                        <td style="text-align: center;">
                                            <img src="<?php echo "../../../AAA/gmgc/gmgc/student_portal/other_forms/be_provisional/back/files/" . $id_proof; ?>" width="100px" alt="Image">
                                            <a href="<?php echo "../../../AAA/gmgc/gmgc/student_portal/other_forms/be_provisional/back/files/" . $id_proof; ?>" target="_blank">View Image</a>
                                        </td>
                                        <td style="text-align: center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="60" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                            </svg>
                                            <a href="<?php echo "../../../AAA/gmgc/gmgc/student_portal/other_forms/be_provisional/back/files/" . $provisional; ?>" target="_blank">View Document</a>
                                        </td>
                                        <td style="color:red;"><?php echo $status; ?></td>
                                        <!-- <td>
                                            <textarea rows="5" name="reason"></textarea>
                                            <a href="./reason/attempt_reason.php" name="send">Send request</a>

                                        </td> -->

                                        <td>
                                            <?php
                                            if ($status == 'Approved') {

                                            ?>
                                                <!-- <form action=> -->
                                                <a target="_blank" href="./certificate/provisional.php?enrollment=<?php echo $er_no; ?>"> <button class="btn btn-primary" id="button3" style="visibility: visible;">Download</button> </a>
                                                <!-- </form> -->
                                            <?php } else { ?>

                                                <a href="./update_certificate_status/provisional_status.php" name="approved" title="Approve"><i class="fa fa-user-check"></i></a>
                                                &nbsp;
                                                <a href="" title="Delete Record" name="delete" onclick="return confirm('Do you want to delete');"><i class="fa fa-user-times"></i></a>


                                            <?php } ?>

                                        </td>
                                        <td><?php echo $req_date; ?></td>
                                        <td><?php echo $app_date; ?></td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
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