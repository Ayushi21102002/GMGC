<?php
 
 // $conn = mysqli_connect('localhost','root','','gmgc','3308');
 include ('./../includes/config.php');

// if (isset($_POST['delete'])) {
    $coursecode = $_GET['coursecode'];
   
    $q = " DELETE FROM `course` WHERE coursecode='$coursecode' ";

    $result = mysqli_query($conn,$q);

    
    if ($result) {
   

?>
        <script>
            alert('Data Deleted sucessfully.');
            window.location = 'http://localhost/aaa/admin/course/manage-courses.php';
        </script>


<?php
    }
    ?>

