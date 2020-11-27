<?php
//开启session
session_start();

$username=isset($_POST['username'])?$_POST['username']:"";
$password=isset($_POST['password'])?$_POST['password']:"";
$remember=isset($_POST['remember'])?$_POST['remember']:"";

if (!empty($username)&& !empty($password))
{
	$conn=mysqli_connect('localhost','root','root','user');
	$sql_select ="select username, password from usertext where username ='$username' and password='$password'";
	$ret=mysqli_query($conn,$sql_select);
	$row=mysqli_fetch_array($ret);
	if ($username==$row['username'] && $password==$row['password'])
	{
		if($remember=="on")
		{
			setcookie("", $username,time()+7*24*3600);
			
		}
		session_start();
		$_SESSION['user']=$username;  //写入日志
		$ip=$_SERVER['REMOTE_ADDR'];
		$date=date('Y-m-d H:m:s');
		$info=sprintf("当前访问用户：%s, IP地址：%s,时间：%s/n",username,$ip,$date);
		$sql_logs="insert into logs(username,ip,date) values('$username','$ip','$date')";
		//日志写入文件，如实现此功能，需要创建文件目录logs
		$f=fopen('./logs/'.date('Ymd').'.log','a+');
		fwrite($f,$info);
		fclose($f);  //跳转到loginsucc.php页面
		header("Location:loginsucc.php");  //关闭数据库，跳转到上述页面
		mysqli_close($conn);
	}
	else
	{
		//用户名或密码错误，赋值err为1
		header("Location:login.php?err=1");
	}
	
}

else
{
	//为空
	header("Location:login.php?err=2");
	
}
?>