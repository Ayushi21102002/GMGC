<?php
session_start();
if(isset($_SESSION['id']))
{
	$host = $_SERVER['HTTP_HOST'];
	session_destroy();
	echo "<script>location.href='/admin/index.php'</script>";
} 
?>