<?php
ob_start();
$server="localhost";
$userid="root";
$password="";
$database="php911";
$con=mysql_connect($server,$userid,$password);
if($con)
{
	
	$mydb=mysql_select_db($database);
	
	if($mydb)
	{
	//echo "server & database connected";
	}
	else{
		
	header("Location:error.php?err_no=2");
		//echo "database connection error";
	}
}
else
{
	header("Location:error.php?err_no=1");
	//echo "server connection error";
	
}
?>