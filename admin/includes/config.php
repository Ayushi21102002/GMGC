<?php
ob_start();
error_reporting(0);
ini_set('memory_limit', '1024M');
//$conn = new mysqli("localhost","root","","masterdata1");
$conn = new mysqli("localhost","root","","gmgc" );
// Check connection
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error);
}
?>