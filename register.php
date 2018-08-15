<?php
include("connection1.php");

$email=$_POST['email'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];

$namecheck = mysql_query("SELECT email FROM users WHERE email ='$email'");
	
		$count = mysql_num_rows($namecheck);
		
		if($count!=0)
			{
			echo "user name already taken! <a href = 'reg.php'>Register again!</a> ";

			}

			if($password == $rpassword)
			{
			
			
	
				if(strlen($email) >	100 )
				{
				echo "Length of username or fullname is too long!";
				}
				else
					if(strlen($password) >100 || strlen ($password)>6)
					{
					echo "Password must be between 6 and 100 characters";

					}
					else
					
					{
			
						
						
						
						$sql="insert into users values('$email','$password')";

							
				
					}
			}


$query=mysql_query($sql);

if($query)
{
	
	echo "You have been registerd! <a href = 'main.php'>Return to login page</a> ";
}
else
{
	echo "error<br/>$sql";
}


//echo $sql;
?>