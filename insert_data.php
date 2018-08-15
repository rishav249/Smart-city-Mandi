<?php
include("connection.php");
$email=$_POST['email'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$feed=$_POST['feed'];

$sql="insert into feedback(email,name,contact,feedback) values('$email','$name',$contact,'$feed')";


$query=mysql_query($sql);
if($query)
{
	
	echo "saved";
}
else
{
	echo "error<br/>$sql";
}


//echo $sql;
?>