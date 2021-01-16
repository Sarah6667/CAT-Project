<?php
include("conn.php");
$id=$_GET['id'];
$sqlres=mysqli_query($conn,"select * from infor where id=$id");
$resuser=mysqli_fetch_array($sqlres);
if(isset($_POST['submit'])){
	if(isset($_POST['phone'])){
		$phone=$_POST['phone'];
	}if(isset($_POST['address'])){
		$address=$_POST['address'];
	}	
	
	$ida=$_POST['ida'];
	$sqlua="update `infor` set phone='$phone',address='$address' where id=$ida ";
	$query=mysqli_query($conn,$sqlua);
	echo  "<script>alert('修改成功!');window.location.href='index.php';</script>";
	
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
		<p><input type="text" name="phone" class="formadd" placeholder="请输入中文" value="<?php echo $resuser['phone'];?>"></p>
	</div>
	<div class="per">
		<p><input type="text" name="address" class="formadd" placeholder="请输入英文" value="<?php echo $resuser['address'];?>"></p>
	</div>
	
	<input type="hidden" name="ida" value="<?php echo $resuser['id'];?>">
	<div class="per">
		<input type="submit" name="submit" class="subadd" value="修改">
	</div>
	</form>
</div>
</body>
</html>
<?php
}
?>