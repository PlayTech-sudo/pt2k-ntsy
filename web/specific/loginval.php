<?php
session_start();
error_reporting(0);
$con=mysqli_connect("Localhost","root", "" ,"form");
if(mysqli_connect_errno())
{
	echo "Connection Fail".mysqli_connect_error();
}

	if($_POST['adminlogin'])
	{

		$ui=$_POST['userid'];
		$pass=$_POST['password'];
		
		if($ui!="" && $pass!="")
		{
			$query="SELECT * FROM LOGIN WHERE adminid='$ui' AND adminpassword='$pass'";
			$data=mysqli_query($con,$query);
			$ret=mysqli_num_rows($data);
			if($ret>0)
			{
				
				header("location:demm.html");
			} 
			else
			{
				echo '<script type="text/javascript"> alert("INVALID LOGIN")</script>';
				header("location:login.php");
			}
		}
		else
		{
			echo "all fields are required";
		}

	}
?>