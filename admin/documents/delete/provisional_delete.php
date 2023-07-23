<?php
 
 include ('../back/config3.php');

// if (isset($_POST['delete'])) {
    $sr_no = $_GET['sr_no'];
   
    $q = " DELETE FROM `provisional_ver` WHERE sr_no='$sr_no' ";

    $result = mysqli_query($conn,$q);

    
    if ($result) {
   

?>
        <script>
            alert('Data Deleted sucessfully.');
            window.location = 'http://localhost/AAA/admin/documents/provisional_ver_display.php';
        </script>


<?php
    }
    ?>

