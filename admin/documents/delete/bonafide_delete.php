<?php
 
 include ('../back/config1.php');

 session_start();
    $enroll=$_SESSION['enrollment'];
 
   
    $q = " DELETE FROM `bonafide_certificate` WHERE enrollment='$enroll' ";

    $result = mysqli_query($conn,$q);

    
    if ($result) {
   

?>
        <script>
            alert('Data Deleted sucessfully.');
            window.location = 'http://localhost/AAA/admin/documents/bonafide_dis.php';
        </script>


<?php
    }
    ?>