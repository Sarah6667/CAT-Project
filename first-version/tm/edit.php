<?php
include("conn.php");
$id=$_GET['id'];
$sqlres=mysqli_query($conn,"select * from information where id=$id");
$resuser=mysqli_fetch_array($sqlres);
if(isset($_POST['submit'])){
	if(isset($_POST['name'])){
		$name=$_POST['name'];
	}	
	$ida=$_POST['ida'];
	$sqlu="update `information` set name='$name' where id=$ida ";
	$query=mysqli_query($conn,$sqlu);
	echo  "<script>alert('修改成功!');window.location.href='index.php';</script>";
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
	<form action="" method="post">
	<div class="per">
		<p><input type="text" name="name" class="formadd" placeholder="请输入记忆库名称" value="<?php echo $resuser['name'];?>"></p>
	</div>
	
	<input type="hidden" name="ida" value="<?php echo $resuser['id'];?>">
	<div class="per">
		<input type="submit" name="submit" class="subadd" value="保存">
	</div>
	</form>
</div>
</p>
</body>
</html>
<?php
}
?>