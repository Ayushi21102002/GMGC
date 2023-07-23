<?php
session_start();
include('../../includes/config.php');
include('../../includes/checklogin.php');
// check_login();
//code for add courses
if (isset($_POST['submit'])) {
    $coursecode = strtoupper($_POST['cc']);
    $coursesn = strtoupper($_POST['cns']);
    $coursefn = strtoupper($_POST['cnf']);

    $query = "insert into  courses (course_code,course_sn,course_fn) values(?,?,?)";
    $stmt = $conn->prepare($query);
    $rc = $stmt->bind_param('sss', $coursecode, $coursesn, $coursefn);
    $stmt->execute();
    echo "<script>alert('Course has been added successfully');</script>";
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
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin.css" rel="stylesheet">

    <link rel="shortcut icon" href="../../images/logo12.png" type="image/x-icon">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="../../index.php">SS | Admin Area</a>

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
        <?php
		include('../../includes/sidebar.php');
		?>

        <div id="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../../index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">View BE Student Details</li>
                </ol>

                <!-- Icon Cards -->
                <!-- <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-fw fa fa-user"></i> Students Option to View Data
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-row"> -->
                <!-- <div class="col-md-4">
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
                                    </div> -->
                <!-- <div class="col-md-4">
                                        <div class="form-label-group">
                                            <select name="details" class="form-control" style="color:black; border-color:#325d88; border-width:1px" required>
                                                <option value="">Details</option>
                                                <option value="INQUIRY DETAILS">Inquiry Details</option>
                                                <option value="ADMISSION DETAILS">Admission Details</option>
                                                <option value="OTHER DETAILS">Other Details</option>
                                                <option value="UPLOAD DOCUMENTS">Upload Documents</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                &nbsp;
                                <div class="col-md-14">
                                    <input type="submit" name="go" value="Go" class="btn btn-primary btn-block" id="export" style="float:center" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <br /> -->

                <!-- Icon Cards-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-fw fa-table"></i> View BE Student Details
                    </div>

                    <div class="card-body">
                        <form method="post" class="form-horizontal">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" id="myTabAttr" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="inquiry-tab-attr" data-toggle="tab" href="#inquiry-attr" role="tab" aria-controls="inquiry-attr" aria-selected="false">Inquiry Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="admission-tab-attr" data-toggle="tab" href="#admission-attr" role="tab" aria-controls="admission-attr" aria-selected="false">Admission Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="document-tab-attr" data-toggle="tab" href="#document-attr" role="tab" aria-controls="document-attr" aria-selected="false">View Documents</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="other-tab-attr" data-toggle="tab" href="#other-attr" role="tab" aria-controls="other-attr" aria-selected="false">Other Details</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="inquiry-attr" role="tabpanel" aria-labelledby="inquiry-tab-attr">
                                    <div class="card-body" style="margin-top: 20px;">
                                        <div class="table-responsive">
                                            <?php
                                            // $conn = mysqli_connect('localhost', 'root', '', 'gmgc', '3308') or die("Failed");
                                            include '../../../includes/config.php';
                                            // if (isset($_POST['view'])) {
                                            $email = $_GET['email'];

                                            $cmd = "SELECT * FROM be_inquiry WHERE email='$email'";
                                            //    echo "$cmd";

                                            $result = mysqli_query($conn, $cmd);


                                            while ($rows = mysqli_fetch_array($result)) {

                                                $s_course = $rows['s_course'];
                                                $s_branch = $rows['s_branch'];
                                                $s_name = $rows['s_name'];
                                                $s_address = $rows['s_address'];
                                                $s_contact = $rows['s_contact'];
                                                $p_contact = $rows['p_contact'];
                                                $s_gender = $rows['s_gender'];
                                                $dob = $rows['dob'];
                                                $s_ssc = $rows['s_ssc'];
                                                $ssc_seatno = $rows['ssc_seatno'];
                                                $s_hsc = $rows['s_hsc'];
                                                $hsc_seatno = $rows['hsc_seatno'];
                                                $hsc_p_year = $rows['hsc_p_year'];
                                                $s_gujcet = $rows['s_gujcet'];
                                                $s_jee = $rows['s_jee'];
                                                $email = $rows['email'];
                                            }
                                            // }
                                            ?>
                                            <table id="load" class="table table-striped table-bordered zero-configuration" align="center" style="width:90%;">
                                                <tbody>
                                                    <!-- <form action= "be_insert.php" method="POST">  -->



                                                    <tr>
                                                        <td> Student Course </td>
                                                        <td><?php echo $s_course; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Student Branch</td>
                                                        <td><?php echo $s_branch; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Student Name </td>
                                                        <td><?php echo $s_name; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Student Address </td>
                                                        <td><?php echo $s_address; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Student Contact</td>
                                                        <td><?php echo  $s_contact; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Parent Contact</td>
                                                        <td><?php echo $p_contact; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Gender</td>
                                                        <td><?php echo $s_gender; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date Of Birth</td>
                                                        <td><?php echo $dob; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>SSC pr%</td>
                                                        <td><?php echo $s_ssc; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>SSC Seat No</td>
                                                        <td><?php echo  $ssc_seatno; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HSC pr% </td>
                                                        <td><?php echo $s_hsc; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HSC Seat No</td>
                                                        <td><?php echo $hsc_seatno; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HSC Passing Year</td>
                                                        <td><?php echo  $hsc_p_year; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>GUJCET Score</td>
                                                        <td><?php echo  $s_gujcet; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>JEE Score</td>
                                                        <td><?php echo  $s_jee; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email Address</td>
                                                        <td><?php echo  $email; ?></td>

                                                    </tr>
                                                    <!-- </form> -->
                                                    <?php

                                                    //     } 
                                                    // }
                                                    ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="admission-attr" role="tabpanel" aria-labelledby="admission-tab-attr">
                                    <div class="card-body" style="margin-top: 20px;">
                                        <div class="table-responsive">
                                            <?php
                                            // $conn = mysqli_connect('localhost', 'root', '', 'gmgc', '3308');
                                            include '../../../includes/config.php';

                                            $email = $_GET['email'];

                                            $cmd = "SELECT * FROM be_inquiry WHERE email='$email'";


                                            $result = mysqli_query($conn, $cmd);

                                            while ($rows = mysqli_fetch_array($result)) {

                                                $s_course = $rows['s_course'];
                                                $s_branch = $rows['s_branch'];
                                                $s_name = $rows['s_name'];
                                                $s_address = $rows['s_address'];
                                                $s_contact = $rows['s_contact'];
                                                $p_contact = $rows['p_contact'];
                                                $s_gender = $rows['s_gender'];
                                                $dob = $rows['dob'];
                                                $s_ssc = $rows['s_ssc'];
                                                $ssc_seatno = $rows['ssc_seatno'];
                                                $s_hsc = $rows['s_hsc'];
                                                $hsc_seatno = $rows['hsc_seatno'];
                                                $hsc_p_year = $rows['hsc_p_year'];

                                                $s_gujcet = $rows['s_gujcet'];
                                                $s_jee = $rows['s_jee'];
                                                $s_group = $rows['s_group'];
                                                $email = $rows['email'];
                                                $password = $rows['password'];
                                                $transaction_id = $rows['transaction_id'];
                                            }
                                            ?>
                                            <table id="load" class="table table-striped table-bordered zero-configuration" align="center" style="width:90%;">
                                                <tbody>
                                                    <!-- <form action= "be_insert.php" method="POST">  -->



                                                    <tr>
                                                        <td> Student Course </td>
                                                        <td><?php echo $s_course; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Student Branch</td>
                                                        <td><?php echo $s_branch; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Student Name </td>
                                                        <td><?php echo $s_name; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Student Address </td>
                                                        <td><?php echo $s_address; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Student Contact</td>
                                                        <td><?php echo  $s_contact; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Parent Contact</td>
                                                        <td><?php echo $p_contact; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Gender</td>
                                                        <td><?php echo $s_gender; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date Of Birth</td>
                                                        <td><?php echo $dob; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>SSC pr%</td>
                                                        <td><?php echo $s_ssc; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>SSC Seat No</td>
                                                        <td><?php echo  $ssc_seatno; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HSC pr% </td>
                                                        <td><?php echo $s_hsc; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HSC Seat No</td>
                                                        <td><?php echo $hsc_seatno; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HSC Passing Year</td>
                                                        <td><?php echo  $hsc_p_year; ?></td>
                                                    </tr>


                                                    <tr>
                                                        <td>GUJCET Score</td>
                                                        <td><?php echo  $s_gujcet; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>JEE Score</td>
                                                        <td><?php echo  $s_jee; ?></td>
                                                    </tr>


                                                    <tr>
                                                        <td>Email Address</td>
                                                        <td><?php echo  $email; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Password</td>
                                                        <td><?php echo  $password; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Transaction Id</td>
                                                        <td><?php echo  $transaction_id; ?></td>
                                                    </tr>
                                                    <!-- </form> -->
                                                    <?php

                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="document-attr" role="tabpanel" aria-labelledby="document-tab-attr">
                                    <div class="card-body" style="margin-top: 20px;">
                                        <div class="table-responsive">
                                            <?php
                                            // $conn = mysqli_connect('localhost', 'root', '', 'gmgc', '3308') or die("Failed");
                                            include '../../../includes/config.php';

                                            $email = $_GET['email'];

                                            $cmd = "SELECT * FROM be_inquiry WHERE email='$email'";
                                            //    echo "$cmd";

                                            $result = mysqli_query($conn, $cmd);


                                            while ($rows = mysqli_fetch_array($result)) {
                                                $email = $rows['email'];
                                                $s_image = $rows['s_image'];
                                                $s_sign = $rows['s_sign'];
                                                $s_aadhar = $rows['s_aadhar'];
                                                $s_leaving = $rows['s_leaving'];
                                                $bank_pb = $rows['bank_pb'];
                                                $s_cast = $rows['s_cast'];
                                                $s_income = $rows['s_income'];
                                                $ssc_i = $rows['ssc_i'];
                                                $hsc_i = $rows['hsc_i'];
                                                $gujcet_i = $rows['gujcet_i'];
                                                $jee_i = $rows['jee_i'];
                                            }


                                            ?>
                                            <table id="load" class="table table-striped table-bordered zero-configuration" align="center" style="width:90%;">
                                                <tbody>
                                                    <!-- <form action= "be_insert.php" method="POST">  -->

                                                    <tr>
                                                        <td> Student Image </td>
                                                        <td><img src="<?php echo "../../../gmgc/student_portal/be_images/" . $s_image; ?>" width="100px" alt="Image"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Student Signature</td>
                                                        <td><img src="<?php echo "../../../gmgc/student_portal/be_images/" . $s_sign; ?>" width="100px" alt="Image"></td>

                                                    </tr>
                                                    <tr>
                                                        <td> Student Aadharcard </td>
                                                        <td><img src="<?php echo "../../../gmgc/student_portal/be_images/" . $s_aadhar; ?>" width="100px" alt="Image"></td>

                                                    </tr>
                                                    <tr>
                                                        <td> Student Leaving Certificate </td>
                                                        <td><img src="<?php echo "../../../gmgc/student_portal/be_images/" . $s_leaving; ?>" width="100px" alt="Image"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Bank Passbook</td>
                                                        <td><img src="<?php echo "../../../gmgc/student_portal/be_images/" . $bank_pb; ?>" width="100px" alt="Image"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cast Certificate</td>
                                                        <td><img src="<?php echo "../../../gmgc/student_portal/be_images/" . $s_cast; ?>" width="100px" alt="Image"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Income Certificate</td>
                                                        <td><img src="<?php echo "../../../gmgc/student_portal/be_images/" . $s_income; ?>" width="100px" alt="Image"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>SSC Marksheet</td>
                                                        <td><img src="<?php echo "../../../gmgc/student_portal/be_images/" . $ssc_i; ?>" width="100px" alt="Image"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HSC Marksheet</td>
                                                        <td><img src="<?php echo "../../../gmgc/student_portal/be_images/" . $hsc_i; ?>" width="100px" alt="Image"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gujcet Markshheet</td>
                                                        <td><img src="<?php echo "../../../gmgc/student_portal/be_images/" . $gujcet_i; ?>" width="100px" alt="Image"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jee Marksheet </td>
                                                        <td><img src="<?php echo "../../../gmgc/student_portal/be_images/" . $jee_i; ?>" width="100px" alt="Image"></td>
                                                    </tr>


                                                    <!-- </form> -->
                                                    <?php

                                                    //     } 
                                                    // }
                                                    ?>
                                                </tbody>

                                            </table>


                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="other-attr" role="tabpanel" aria-labelledby="other-tab-attr">
                                    <div class="card-body" style="margin-top: 20px;">
                                        <div class="table-responsive">
                                            <?php
                                            // $conn = mysqli_connect('localhost', 'root', '', 'gmgc', '3308') or die("Failed");
                                            include '../../../includes/config.php';


                                            $email = $_GET['email'];

                                            $cmd = "SELECT * FROM be_inquiry WHERE email='$email'";
                                            //    echo "$cmd";

                                            $result = mysqli_query($conn, $cmd);


                                            while ($rows = mysqli_fetch_array($result)) {
                                                $email = $rows['email'];
                                                $acpc_meritno = $rows['acpc_meritno'];
                                                $acpc_meritmark = $rows['acpc_meritmark'];
                                                $s_category = $rows['s_category'];
                                                $stu_cast = $rows['stu_cast'];
                                                $add_type = $rows['add_type'];
                                                $nationality = $rows['nationality'];
                                                $religion = $rows['religion'];
                                                $phy_handicap = $rows['phy_handicap'];
                                                $eco_backward = $rows['eco_backward'];
                                                $f_income = $rows['f_income'];
                                                $marital_status = $rows['marital_status'];
                                                $board = $rows['board'];
                                            }


                                            ?>
                                            <table id="load" class="table table-striped table-bordered zero-configuration" align="center" style="width:90%;">
                                                <tbody>
                                                    <!-- <form action= "be_insert.php" method="POST">  -->



                                                    <tr>
                                                        <td> ACPC Merit No. </td>
                                                        <td><?php echo $acpc_meritno; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ACPC Merit Mark</td>
                                                        <td><?php echo $acpc_meritmark; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Student Category </td>
                                                        <td><?php echo $s_category; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td> Student Cast </td>
                                                        <td><?php echo $stu_cast; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Addmission Type</td>
                                                        <td><?php echo  $add_type; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nationality</td>
                                                        <td><?php echo $nationality; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Religion</td>
                                                        <td><?php echo $religion; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phisical Handicap</td>
                                                        <td><?php echo $phy_handicap; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Economically Backward</td>
                                                        <td><?php echo $eco_backward; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Family Income</td>
                                                        <td><?php echo  $f_income; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marital Status </td>
                                                        <td><?php echo $marital_status; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Board</td>
                                                        <td><?php echo $board; ?></td>
                                                    </tr>

                                                    <!-- </form> -->
                                                    <?php

                                                    //     } 
                                                    // }
                                                    ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

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
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../../js/demo/datatables-demo.js"></script>
    <script src="../../js/demo/chart-area-demo.js"></script>

</body>

</html>