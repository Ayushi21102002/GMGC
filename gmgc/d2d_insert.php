<?php

// include '../insert/includes/connection.php';
$conn = mysqli_connect('localhost', 'root', '', 'gmgc');

if (isset($_POST['submit'])) {

    

$s_course = $_POST['s_course'];
$s_branch = $_POST['s_branch'];
$s_name = $_POST['s_name'];
$s_address = $_POST['s_address'];
$s_contact = $_POST['s_contact'];
$p_contact= $_POST['p_contact'];
$s_gender = $_POST['s_gender'];
$dob = $_POST['dob'];
$s_ssc = $_POST['s_ssc'];
$ssc_seatno = $_POST['ssc_seatno'];
$diplo_insti_name = $_POST['diplo_insti_name'];
 $diplo_branch_name = $_POST['diplo_branch_name'];
 $diplo_p_year = $_POST['diplo_p_year'];
 $diplo_seatno = $_POST['diplo_seatno'];
$diplo_cgpa = $_POST['diplo_cgpa'];
$email = $_POST['email'];

$query = "INSERT INTO `d2d_inquiry`(`s_course`, `s_branch`, `s_name`,`s_address` , `s_contact`, `p_contact`,`s_gender`,`dob`, `s_ssc`, 
  `ssc_seatno`,`diplo_insti_name`,`diplo_branch_name`, `diplo_p_year`,`diplo_seatno`,`diplo_cgpa`,`email`) VALUES ('$s_course', '$s_branch', '$s_name','$s_address' , 
  '$s_contact', '$p_contact','$s_gender','$dob', '$s_ssc', '$ssc_seatno','$diplo_insti_name', '$diplo_branch_name','$diplo_p_year','$diplo_seatno','$diplo_cgpa','$email' )";
    
    $result = mysqli_query($conn, $query);
    
            if ($result)  {
                
                echo "success2";
            } 
            else {
    
            echo "fail2";
            }

}
mysqli_close($conn);
    
?>