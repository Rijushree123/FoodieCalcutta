<?php
	session_start();
	
	$con=mysqli_connect("localhost",'root','');
	
	mysqli_select_db($con,'useregistration');
	
	$email=$_POST['email'];
	$firstname=$POST['firstname'];
	$lastname=$POST['lastname'];
	$city=$POST['city'];
	$state=$POST['state'];
	$zip=$POST['zip'];
	$pass=$_POST['password'];
	
	
	$s="select*from signupres where email='$email',firstname='$firstname',lastname='$lastname',city='$city'',state='$state',zip='$zip'";
	
	$result=mysqli_query($con,$s);
	
	$num=mysqli_num_rows($result);
	
	if($num==1)
	{
		echo"Username Already Taken";
	}
	else
	{
		$reg="insert into signupres(email,firstname,lastname,city,state,zip,password)values('$email','$firstname','$lastname','city','state','zip','pass')";
		mysqli_query($con,$reg);
		echo" Registration Successfull";
	}
?>
