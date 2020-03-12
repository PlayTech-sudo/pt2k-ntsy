<?php
$con=mysqli_connect("Localhost", "root", "", "form");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
if(isset($_POST['submit1']))
{
	$val1=$_POST['visiter_heading'];
	$temp=$_POST['visit_hours'];
	$val2=$temp * 60;

	if($val1!="" && $val2!="")
	{
		$query="UPDATE `notification` SET `header`='$val1',`hours`='$val2' WHERE no='1'";
		$data=mysqli_query($con,$query);
		if ($data)
		{
			header("location:notificationpage.php");		}
		if($data==0)
		{
            	
			echo "<script type='text/javascript'>showNotification('top','right','Entry Inserted', 'problem while updating data');</script>";
		}
		
	}
	else
	{
		echo "all fields are required";
	}
}
if(isset($_POST['submit2']))
{
	$val1=$_POST['webcount_heading'];
	$temp=$_POST['webcount_hours'];
	$val2=$temp * 60;

	if($val1!="" && $val2!="")
	{
		$query="UPDATE `notification` SET `header`='$val1',`hours`='$val2' WHERE no='2'";
		$data=mysqli_query($con,$query);
		if ($data)
		{
			header("location:notificationpage.php");		}
		if($data==0)
		{
            	
			echo "<script type='text/javascript'>showNotification('top','right','Entry Inserted', 'problem while updating data');</script>";
		}
		
	}
	else
	{
		echo "all fields are required";
	}
}
if(isset($_POST['submit3']))
{
	$val1=$_POST['signup_header'];
	$temp=$_POST['signup_hours'];
	$val2=$temp * 60;
	echo $val2;

	if($val1!="" && $val2!="")
	{
		$query="UPDATE `notification` SET `header`='$val1',`hours`='$val2' WHERE no='3'";
		$data=mysqli_query($con,$query);
		if ($data)
		{
			//header("location:defination.php");
			header("location:notificationpage.php");
		}
		if($data==0)
		{
            	
			echo "<script type='text/javascript'>showNotification('top','right','Entry Inserted', 'problem while updating data');</script>";
		}
		
	}
	else
	{
		echo "all fields are required";
	}
}


?>