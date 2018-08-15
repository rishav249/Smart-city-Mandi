<?php
include("connection.php");
$email=$_POST['email'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$comp=$_POST['comp'];

$sql="insert into complaints(email,name,contact,complaints) values('$email','$name',$contact,'$comp')";


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