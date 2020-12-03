<?php
include("conn.php");
$uid=$_GET['id'];
if(isset($_POST['submit'])){
	if(isset($_POST['phone'])){
		$phone=$_POST['phone'];
	}if(isset($_POST['address'])){
		$address=$_POST['address'];
	}
	$sql=mysqli_query($conn , "INSERT INTO `infor` (`id`, `uid`, `phone`, `address`) VALUES ('null',  '$uid',  '$phone',  '$address')");
	echo  "<script>alert('添加成功!');window.location.href='index.php';</script>";
}else{
?>
<!DOCTYPE html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<title>翻译记忆库</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<div class="form">
	<form action="" method="post">
	<div class="per">
		<p><input type="text" name="phone" class="formadd" placeholder="请输入中文"></p>
	</div>
	<div class="per">
		<p><input type="text" name="address" class="formadd" placeholder="请输入英文"></p>
	</div>
	
	<div class="per">
		<input type="submit" name="submit" class="subadd" value="添加">
	</div>
	</form>
</div>
</body>
</html>
<?php
}
?>