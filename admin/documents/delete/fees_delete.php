<?php

include('../back/config.php');

// if (isset($_POST['delete'])) {
$sr_no = $_GET['sr_no'];

$q = "DELETE FROM `fees_structure` WHERE sr_no = '$sr_no'";

$result = mysqli_query($conn, $q);


if ($result) {


?>
    <script>
        alert('Data Deleted sucessfully.');
        window.location = 'http://localhost/AAA/admin/documents/fees_structure_display.php';
    </script>


<?php
}
// }
?>