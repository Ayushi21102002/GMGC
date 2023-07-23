<?php
    $con = mysqli_connect('localhost', 'root', '', 'gmgc');
    session_start();
    $enroll=$_GET['enrollment'];
    $app_date=date("d/m/y"); 
    mysqli_query($con,"UPDATE `fees_structure` SET status='Approved', app_date='$app_date' WHERE enrollment='$enroll'");

?>
<script>
        
        alert('you have approved the fees certificate');
        window.location = "http://localhost/AAA/admin/documents/fees_structure_display.php";
    </script>

