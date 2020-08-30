<?php
	session_start();
	
	$con=mysqli_connect("localhost",'root','');
	
	mysqli_select_db($con,'useregistration');
	
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
	$s="select*from loginres where email='$email'";
	
	$result=mysqli_query($con,$s);
	
	$num=mysqli_num_rows($result);
	
	if($num==1)
	{
		echo"Username Already Taken";
	}
	else
	{
		$reg="insert into loginres(email,password)values('$email','pass')";
		mysqli_query($con,$reg);
		echo" Registration Successfull";
	}
?>
