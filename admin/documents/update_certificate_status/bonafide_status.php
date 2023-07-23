<?php
    $con = mysqli_connect('localhost', 'root', '', 'gmgc');
    session_start();
    // $enroll=$_SESSION['enrollment'];
    $er_no = $_GET['enrollment'];
    $app_date=date("d/m/y"); 
    mysqli_query($con,"UPDATE `bonafide_certificate` SET status='Approved', app_date='$app_date' WHERE enrollment='$er_no'");

?>
<script>
        
        alert('you have approved the bonafide certificate');
        window.location = "http://localhost/AAA/admin/documents/bonafide_dis.php";
    </script>


