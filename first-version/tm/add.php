<?php
include("conn.php");
if(isset($_POST['submit'])){
	if(isset($_POST['name'])){
		$name=$_POST['name'];
	}
	$sql=mysqli_query($conn , "INSERT INTO `information` (`id`, `name`) VALUES ('null',  '$name')");
	echo  "<script>alert('添加成功!');window.location.href='index.php';</script>";
}else{
?>
<!DOCTYPE html>
<html lang="en">
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

<div <div class="container">
	<form action="" class="form-horizontal" method="post">
	<h3>记忆库信息</h3>
	<div>
		
		<p>名称：<input type="text" name="name" class="form-control" placeholder="请输入库名称" style="width:200px;"></p>
		<input type="submit" name="submit"  value="添加" class="btn btn-default">
	</div>
	
	<div class="col-sm-offset-2 col-sm-10">
		
	</div>
	</form>
</div>
</body>
</html>
<?php
}
?>