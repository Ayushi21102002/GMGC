<?php

//  
// $conn = mysqli_connect('localhost','root','','gmgc','3308');
include ('./../includes/config.php');

  if(isset($_POST['submit'])){
    $id = $_POST['id'];

    $course_fn = $_POST['course_fn'];
    $bcode = $_POST['bcode'];
    $bname = $_POST['bname'];
    


    $cmd = "UPDATE branch SET course_fn ='$course_fn', bcode = '$bcode', bname = '$bname' WHERE id ='$id'";
  
   $sql = mysqli_query($conn, $cmd);
    
    if($sql){

      echo "<script>alert('Branch has been Updated Successfully.');</script>";
echo "<script>location.href='http://localhost/aaa/admin/branch/manage-branch.php';</script>";
  }

  else{
      echo"<script>alert('error in branch edition');</script>";
  }
  }

?>