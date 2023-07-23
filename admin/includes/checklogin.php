<?php
function check_login()
{
    	    if(!$_SESSION['alogin'])
    {
        // header("Location:http://localhost/admin/index.php");
    }
if(strlen($_SESSION['id'])==0)
	{	
		//$host = $_SERVER['HTTP_HOST'];
		//$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		//$extra="index.php";		
		$_SESSION["id"]="";
		//header("Location: http://$host$uri/$extra");
		// header("Location:http://localhost/admin/index.php");
	}
}
?>