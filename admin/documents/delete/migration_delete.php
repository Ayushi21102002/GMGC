<?php
 
 include ('../back/config2.php');

// if (isset($_POST['delete'])) {
    $sr_no = $_GET['sr_no'];
   
    $q = " DELETE FROM `migration_c` WHERE sr_no='$sr_no' ";

    $result = mysqli_query($conn,$q);

    
    if ($result) {
   

?>
        <script>
            alert('Data Deleted sucessfully.');
            window.location = 'http://localhost/AAA/admin/documents/migration_cer_display.php';
        </script>


<?php
    }
    ?>

