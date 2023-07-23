<?php session_start();
include('./back/config.php');
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
                    <li class="breadcrumb-item active">Duplicate Marksheet</li>
                </ol>

                <!-- Icon Cards-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-fw fa fa-desktop"></i> Duplicate Marksheet
                    </div>

                    <div class="card-body">
                        <table id="zctb" class="display table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Srno.</th>
                                    <th>Student Name</th>
                                    <th>Er_no.</th>
                                    <th>Branch</th>
                                    <th>Semester</th>
                                    <th>Total Copy</th>
                                    <th>Exam Details</th>
                                    <th>Id proof</th>
                                    <th>Affidavit</th>
                                    <th>Marksheet</th>
                                    <th>Status</th>
                                    
                                    <th>Action</th>
                                    <th>Requested date</th>
                                    <th>Approved date</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                                <?php
                                 $con = mysqli_connect('localhost','root','','gmgc');
                                $cmd = "SELECT * FROM `duplicategrade_certificate`";
                                $sno = 0;
                                $result = mysqli_query($conn, $cmd);
                                while ($row = mysqli_fetch_array($result)) {
                        
                                    $name = $row['name'];
                                    $er_no = $row['enrollment'];
                                    $branch = $row['branch'];
                                    $sem= $row['sem'];
                                    $no_of_copy = $row['total_copy'];
                                    $exam_detail= $row['exam_detail'];
                                    $id_proof = $row['id_proof'];
                                    $aff = $row['affidavite'];
                                    $grad = $row['marksheet'];
                                    $status = $row['status'];   
                                    $req_date= $row['req_date'];                            
                                    $app_date=$row['app_date'];

                                    $_SESSION['enrollment']=$er_no;
                                   ?>
                                    <tr>
                                        <td style="display: none;">$g;</td>
                                        <td><?php echo $sno = $sno + 1; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $er_no; ?></td>
                                        <td><?php echo $branch ; ?></td>
                                        <td><?php echo $sem ; ?></td>
                                        <td><?php echo $no_of_copy; ?></td>
                                        <td><?php echo $exam_detail; ?></td>

                                        <td style="text-align: center;">
                                        <img src="<?php echo "../../../AAA/gmgc/gmgc/student_portal/certificates/marksheet_image/". $id_proof; ?>" width="100px" alt="Image">
                                            <a href="<?php echo "../../../AAA/gmgc/gmgc/student_portal/certificates/marksheet_image/" . $id_proof; ?>" target="_blank">View Image</a>
                                        </td>
                                        <td style="text-align: center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="60" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                            </svg>
                                            <a href="<?php echo "../../../AAA/gmgc/gmgc/student_portal/certificates/marksheet_image/" . $aff; ?>" target="_blank">View Document</a>
                                        </td>

                                        <td style="text-align: center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="60" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                            </svg>
                                            <a href="<?php echo "../../../AAA/gmgc/gmgc/student_portal/certificates/marksheet_image/" . $grad; ?>" target="_blank">View Document</a>
                                        </td>
                                        <td style="color:red;"><?php echo $status; ?></td>
                                        




                                        <td>
                                            <?php
                                            if($status=='Approved'){
                                                
                                            ?>
                                            <form action="./certificate/marksheet.php">
                                            <button  class="btn btn-primary" id="button3" style="visibility: visible;">Download</button>
                                            </form>
                                            <?php }else{?>
                                            
                                            <a href="./update_certificate_status/duplicate_status.php" name="approved" title="Approve Record"><i class="fa fa-user-check"></i></a>
                                            &nbsp;
                                            <a href="./delete/gradsheet_delete.php" title="Deny Request" name="delete" onclick="return confirm('Do you want to delete');"><i class="fa fa-user-times"></i></a>
                                        
                                        
                                            <?php }?>
                                            
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

</body>

</html>

<script src="./js/main.js"></script>

</body>

</html>