<?php
 
 // $conn = mysqli_connect('localhost','root','','gmgc','3308');
 include ('./../includes/config.php');

// if (isset($_POST['delete'])) {
    $email = $_GET['email'];
   
    $q = " DELETE FROM `branch_cor` WHERE email='$email' ";

    $result = mysqli_query($conn,$q);

    
    if ($result) {
   

?>
        <script>
            alert('Data Deleted sucessfully.');
            window.location = 'http://localhost/aaa/admin/branch_co-ordinator/manage_co-ordinator.php';
        </script>


<?php
    }
    ?>

