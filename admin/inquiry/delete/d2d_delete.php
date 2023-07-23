<?php

$conn = mysqli_connect('localhost', 'root', '', 'gmgc', '3308');
include('./../../includes/config.php');

// if (isset($_POST['delete'])) {
$email = $_GET['email'];

$q = " DELETE FROM `d2d_inquiry` WHERE email='$email' ";

$result = mysqli_query($conn, $q);


if ($result) {


?>
    <script>
        alert('Data has been Deleted Successfully.');
        window.location = 'http://localhost/aaa/admin/inquiry/display/d2d_inquiry-students.php';
    </script>


<?php
}
?>