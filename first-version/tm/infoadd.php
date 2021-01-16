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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>翻译记忆库</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<p>
<div class="container">

<form class="form-horizontal" role="form" action="" method="post">
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">中文</label>
		<div class="col-sm-10">
			<input type="text" name="phone" class="form-control" placeholder="请输入中文">
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">英文</label>
	<div class="col-sm-10">
			<input type="text" name="address" class="form-control" placeholder="请输入英文">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<input type="submit" name="submit" class="btn btn-default" value="添加">
		</div>
	</div>
</form>
</div>
</p>
</body>
</html>
<?php
}
?>