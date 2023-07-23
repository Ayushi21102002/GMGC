<?php

//  
// $conn = mysqli_connect('localhost','root','','gmgc','3308');
include ('./../includes/config.php');

  if(isset($_POST['submit'])){

    $coursecode = $_POST['coursecode'];
    $course_sn = $_POST['course_sn'];
    $course_fn = $_POST['course_fn'];
    $id = $_POST['id'];

    $cmd = "UPDATE course SET coursecode ='$coursecode', course_sn = '$course_sn', course_fn = '$course_fn' where id = '$id'";
    $result = mysqli_query($conn, $cmd);
    
    if($result){

        echo "<script>alert('Course has been Updated successfully');</script>";
  echo "<script>location.href='http://localhost/aaa/admin/course/manage-courses.php';</script>";
    }

    else{
        echo"<script>alert('error in course edition');</script>";
    }
  }

?>