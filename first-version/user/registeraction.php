<?php

session_start();

$username=isset($_POST['username'])?$_POST['username']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
$re_password=isset($_POST['re_password'])?$_POST['re_password']:"";
$email=isset($_POST['email'])?$_POST['email']:"";

if ($password==$re_password)
{
	$conn=mysqli_connect('localhost','root','root','user');
	$sql_select="select username from usertext where username='$username'";
	$ret=mysqli_fetch_array($ret);
	if ($username==$row['username'])
	{
		header("Location:register.php?err=1");
		
	}
	else
	{
		$sql_insert="insert into usertext(username,password,email) values('$username','$password','$email')";
		mysqli_query($conn,$sql_insert);
		header("Location:register.php?err=3");
	}
	mysqli_close($conn);
}
else{
	header("Location:register.php?err=2");
}
?>