<?php
session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'gmgc');

    $er_no=$_SESSION['enrollment'];
    if (isset($_POST['send'])){
        echo"okkk";
    $reason = $_POST['reason'];
                        $ins= "INSERT INTO `attempt_certificate`(`reason`) VALUES ($reason) WHERE enrollment=$er_no ";
                        $res=mysqli_query($conn,$ins);
                        if($res){
                            ?>
                            <script>
                                alert('reason sended successfully');
                                // window.location = "http://localhost/AAA/admin/documents/attempt_dis.php";
                            </script>
                        <?php
                        } else {
                        ?>
                            <script>
                                alert('Reason not sended successfully');
                                // window.location = "http://localhost/AAA/admin/documents/attempt_dis.php";
                            </script>
                    <?php
                        }
    }
                                                   
?>