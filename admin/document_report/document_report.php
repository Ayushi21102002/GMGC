<?php session_start();
include('./../includes/config.php');
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
                    <li class="breadcrumb-item active">View Branch</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-fw fa fa-user"></i> Students Option to View Data
                    </div>
                    <form action="" method="GET">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="form-label-group">
                                            <select name="institute" id="institute" class="form-control" style="color:black; border-color:#325d88; border-width:1px" required>
                                                <option value="all">Select Institute</option>
                                                <option value="1">Gyanmanjari Institute of Technology (GMIT) - 1st Year Degree Engineering</option>
                                                <option value="2">Gyanmanjari Institute of Technology (GMIT) - Diploma To Degree (D2D) Engineering</option>
                                                <option value="3">Gyanmanjari Diploma Engineering College (GMDC)</option>
                                                <option value="4">Gyanmanjari Pharmacy College (GMPC)</option>
                                                <option value="5">Gyanmanjari Science College (GMSC)</option>
                                                <option value="6">Gyanmanjari College of Computer Application (GMCC)</option>
                                                <option value="7">Gyanmanjari PG Center (GMPGC)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label-group">
                                            <select name="b_name" id="b_name" class="form-control" style="color:black; border-color:#325d88; border-width:1px">
                                                <option value="all">Select Branch</option>

                                                <option value="1">Select Branch</option>
                                                <option value="1">Computer Engineering</option>
                                                <option value="1">Information Technology</option>
                                                <option value="1">Civil Engineering</option>
                                                <option value="1">Electrical Engineering</option>
                                                <option value="1">Mechanical Engineering</option>

                                                <option value="2">Select Branch</option>
                                                <option value="2">Computer Engineering</option>
                                                <option value="2">Information Technology</option>
                                                <option value="2">Civil Engineering</option>
                                                <option value="2">Electrical Engineering</option>
                                                <option value="2">Mechanical Engineering</option>

                                                <option value="3">Select Branch</option>
                                                <option value="3">Computer Engineering</option>
                                                <option value="3">Information Technology</option>
                                                <option value="3">Civil Engineering</option>
                                                <option value="3">Electrical Engineering</option>
                                                <option value="3">Mechanical Engineering</option>

                                                <option value="4">Select Branch</option>
                                                <option value="4">B.Pharm</option>

                                                <option value="5">Select Branch</option>
                                                <option value="5">CPM (For A Group)</option>
                                                <option value="5">MiCZ (For B Group)</option>
                                                <option value="5">MiBZ (For B Group)</option>
                                                <option value="5">CBZ (For B Group)</option>

                                                <option value="6">Select Course</option>
                                                <option value="6">BCA</option>
                                                <option value="6">Bsc-IT</option>
                                                <option value="6">B.com</option>

                                                <option value="7">Select Branch</option>
                                                <option value="7">M.Sc. Chemistry</option>
                                                <option value="7">M.Sc. Microbiology</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-label-group">
                                            <select name="certificate" id="certificate" class="form-control" style="color:black; border-color:#325d88; border-width:1px">
                                                <option value="">Select Certificate</option>
                                                <option value="PV">Provisional Verification</option>
                                                <option value="MC">Migration Certificate</option>
                                                <option value="LC">Language Certificate</option>
                                                <option value="DGS">Duplicate Grade Sheet</option>
                                                <option value="CP">CGPA to Percentage</option>
                                                <option value="AC">Attempt Certificate</option>
                                                <option value="FS">Fees Structure</option>
                                                <option value="BC">Bonafide Certificate</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">From Date :</label>
                                            <input type="date" name="from_date" value="<?php if (isset($_GET['from_date'])) {
                                                                                            echo $_GET['from_date'];
                                                                                        } ?>" class="form-control" style="color:black; border-color:#325d88; border-width:1px" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">To Date :</label>
                                            <input type="date" name="to_date" value="<?php if (isset($_GET['to_date'])) {
                                                                                            echo $_GET['to_date'];
                                                                                        } ?>" class="form-control" style="color:black; border-color:#325d88; border-width:1px" required>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="col-md-13">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block" id="export" style="float:center" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        View BE Student Data
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Student Course</th>
                                        <th>Student Branch</th>
                                        <th>Student Name</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $con = mysqli_connect("localhost", "root", "", "gmgc");

                                    if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                                        $from_date = $_GET['from_date'];
                                        $to_date = $_GET['to_date'];

                                        $query = "SELECT * FROM `be_inquiry` WHERE `datetime` BETWEEN '$from_date' and '$to_date'";
                                        $query_run = mysqli_query($con, $query);

                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $row) {

                                    ?>
                                                <tr>
                                                    <td><?= $row['s_course']; ?></td>
                                                    <td><?= $row['s_branch']; ?></td>
                                                    <td><?= $row['s_name']; ?></td>
                                                </tr>
                                    <?php
                                            }
                                        } else {
                                            echo "No Records Found";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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

    <script>
        var $institute = $('#institute'),
            $b_name = $('#b_name'),
            $options = $b_name.find('option');

        $institute.on('change', function() {
            $b_name.html($options.filter('[value="' + this.value + '"]'));
        }).trigger('change');
    </script>

</body>

</html>