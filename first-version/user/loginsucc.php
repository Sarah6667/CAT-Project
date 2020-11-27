<?php
//开启session
session_start();
?><!DOCTYPE html>

<html>
<head>
<title>登录成功</title>
<meta name="content-type" charset="utf8">
</head>
<body>
<div>
<?php
//开启session

$username=isset($_SESSION['user'])?$_SESSION['user']:""; //判断session是否为空
if(!empty($username))
{
	?>
	<h1>登录成功！</h1>欢迎您！
	<?php
	echo $username;?>
	<br/><h2>跳转到<a href="../project/index.php">主页</a>……</h2>
	<?php
}
else
{
?>
<h1>你无权访问！</h1>
<?php
	
}
?></div>
</body>
</html>

