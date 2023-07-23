<?php
 
 include ('../back/config1.php');

    $sr_no = $_GET['sr_no'];
   
    $q = " DELETE FROM `language_c` WHERE sr_no='$sr_no' ";

    $result = mysqli_query($conn,$q);

    
    if ($result) {
   

?>
        <script>
            alert('Data Deleted sucessfully.');
            window.location = 'http://localhost/AAA/admin/documents/language_cer_display.php';
        </script>


<?php
    }
    ?>

