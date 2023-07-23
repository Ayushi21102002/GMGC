<?php
 
 // $conn = mysqli_connect('localhost','root','','gmgc','3308');
 include ('./../includes/config.php');

// if (isset($_POST['delete'])) {
    $bcode = $_GET['bcode'];
   
    $q = " DELETE FROM `branch` WHERE bcode='$bcode' ";

    $result = mysqli_query($conn,$q);

    
    if ($result) {
   

?>
        <script>
            alert('Data Deleted sucessfully.');
            window.location = 'http://localhost/aaa/admin/branch/manage-branch.php';
        </script>


<?php
    }
    ?>

