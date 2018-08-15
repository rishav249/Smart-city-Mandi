<?php
include("connection.php");
?>
<head>
<?php
include("script1.php");
?>
</head>
<body onload='new_pic1()' onload='new_pic()'>
<?php
include("c.php");


if(isset($_POST['save']))
		{
			
	
$email=$_POST['email'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$comp=$_POST['comp'];
$sql="insert into complaints(email,name,contact,complaint) values('$email','$name',$contact,'$comp')";

$query=mysql_query($sql);
if($query)
{
$auto_id=mysql_insert_id();	
	echo "saved<br/>empid=$auto_id";
}
else
{
	echo "error<br/>$sql";
}
		}


?>


</div>
</body>
</html>