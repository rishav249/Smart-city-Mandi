<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if($email && $password)
{

$connect = mysql_connect("localhost","root","") or die("Couldn't connect!");
mysql_select_db("phplogin") or die("Couldn't find db");

$query= mysql_query("SELECT * From users WHERE email='$email'");
$numrows = mysql_num_rows($query);

	if ($numrows!=0)
	{
	//code to login
	 while ($row = mysql_fetch_assoc($query))
	 	{
			$dbemail = $row['email'];
			$dbpassword = $row['password'];
		}
		if($email==$dbemail&&$password==$dbpassword)
		{
			echo "You're in! <a href='member.php'>Click</a> here to enter the member page ";
			$_SESSION['email']=$email;
		}
		else
		 echo "Incorrect password!";
		
	}
	else
	die("That user does't exist!");

	
}
else
   die("Please enter  username and Password!");

?>