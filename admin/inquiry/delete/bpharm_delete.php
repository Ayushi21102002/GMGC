<?php

// $conn = mysqli_connect('localhost','root','','gmgc','3308');
include('./../../includes/config.php');

// if (isset($_POST['delete'])) {
$email = $_GET['email'];

$q = " DELETE FROM `bpharm_inquiry` WHERE email='$email' ";

$result = mysqli_query($conn, $q);


if ($result) {


?>
    <script>
        alert('Data has been Deleted Successfully.');
        window.location = 'http://localhost/aaa/admin/inquiry/display/bpharm_inquiry-students.php';
    </script>


<?php
}
?>