<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="./bootlogin.css">
    <link rel="shortcut icon" href="./logo12.png" type="image/x-icon">
    <title>Login Form</title>

</head>

<body style="background-color: rgb(231, 231, 231);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">

            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">

                <?php

                // $conn = mysqli_connect('localhost', 'root', '', 'gmgc', '3308') or die('failed!');
                include('../includes/config.php');

                $query = "SELECT `email`, `password` FROM `login`";

                // echo $query;

                $queryrun = mysqli_query($conn, $query) or die("query failed!");


                if ($queryrun->num_rows > 0) {
                    while ($rows = mysqli_fetch_array($queryrun)) {
                        $email = $rows['email'];
                        $password = $rows['password'];


                        // $msg = '';

                        if (
                            isset($_POST['login']) && !empty($_POST['email'])
                            && !empty($_POST['password'])
                        ) {

                            if (
                                $_POST['email'] == $email &&
                                $_POST['password'] == $password
                            ) {
                                $_SESSION['valid'] = true;
                                $_SESSION['timeout'] = time();
                                $_SESSION['email'] = '$email';

                                echo "<script>alert('Login Successfully');</script>";
                                echo "<script>window.location.replace('http://localhost/aaa/admin/index.php');</script>";
                                // header("Location: http://localhost/login/");
                            } else {
                                // $msg = 'Wrong username or password';
                                echo "<script>alert('Invalid Email or Password');</script>";
                            }
                        }
                    }
                }
                ?>

                <form id="log" style="background-color: white; width: 100%;" class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="row" style=" border-radius: 5px; background-color:rgb(200, 194, 194);">
                        <div class="text-center">
                            <img src="./logo12.png" alt="" style="width: 80px; border-radius: 100%; margin-top: 15px;;">
                        </div>
                        <h3 style=" font-size:25px; text-align:center; color: BLACK;">Gyanmanjari Group Of Colleges</h3>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="form-group">
                            <label style="font-weight: bolder; font-size: 18px; float:left; color: black; font-size: 20px; margin-right: 46px;">Email-Id:</label>
                            <span style="display:block; overflow:hidden;">
                                <input type="email" class="form-control" placeholder="Enter your email" name="email" required autofocus>
                            </span>
                        </div> <br>

                        <div class="form-group">
                            <label style="font-weight: bolder; font-size: 18px; float:left; color: black; font-size: 20px; margin-right: 35px;">Password:</label>
                            <span style="display:block; overflow:hidden;">
                                <input type="password" class="form-control" placeholder="Enter your password" name="password" maxlength="8">
                            </span>
                        </div>

                        <div>
                            <button id="submit" type="submit" name="login" class="btn btn-block" style="background-color:rgb(185, 178, 178); color: black; font-weight: bolder; font-size: 19px;">Login</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>