<?php
    $con = mysqli_connect('localhost', 'root', '', 'gmgc');
    session_start();
    $enroll=$_SESSION['enrollment'];
    $app_date=date("d/m/y"); 
    mysqli_query($con,"UPDATE `attempt_certificate` SET status='Approved', app_date='$app_date' WHERE enrollment='$enroll'");

?>
<script>
        
        alert('you have approved the first attempt certificate');
        window.location = "http://localhost/AAA/admin/documents/attempt_dis.php";
    </script>

