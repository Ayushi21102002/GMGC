<?php

//  
// $conn = mysqli_connect('localhost', 'root', '', 'gmgc', '3308');
include ('./../includes/config.php');

if (isset($_POST['submit'])) {

  $course_fn = $_POST['course_fn'];
  $bname = $_POST['bname'];
  $f_name = $_POST['f_name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $id = $_POST['id'];

  $cmd = "UPDATE branch_cor SET `course_fn` ='$course_fn', `bname` = '$bname', `f_name` = '$f_name' ,`email` ='$email', `mobile` ='$mobile', `password` = '$password' WHERE `id`='$id'";

  $result = mysqli_query($conn, $cmd);

  if ($result) {

    echo "<script>alert('Data has been Edited Successfully.');</script>";
    echo "<script>location.href='http://localhost/aaa/admin/branch_co-ordinator/manage_co-ordinator.php';</script>";
  }    else {
    echo "<script>alert('error in data edition');</script>";
  }
}
