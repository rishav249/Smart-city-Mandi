<?php
include("connection.php");
?>
<head>
<?php
include("script.php");
?>
</head>
<body onload='new_pic1()' onload='new_pic()'>
<?php
include("f.php");


if(isset($_POST['save']))
		{
			
	
$email=$_POST['email'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$feed=$_POST['feed'];
$sql="insert into feedback(email,name,contact,feedback) values('$email','$name',$contact,'$feed')";

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