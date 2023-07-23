<?php
$host = $_SERVER['HTTP_HOST'];
echo $host;
$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/');
echo "<br>".$uri;
?>