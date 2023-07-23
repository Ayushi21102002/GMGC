<?php
$DB_host = "gmit.edu.in";
$DB_user = "gmiteeba_ss";
$DB_pass = "ss@123?";
$DB_name = "gmiteeba_masterdata2";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>