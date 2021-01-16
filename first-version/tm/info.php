<?php 
include("conn.php");
$id=$_GET['id'];
$sqlres=mysqli_query($conn,"select * from information where id=$id");
$resuser=mysqli_fetch_array($sqlres);
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
	<div class="container">
		<div class="ee">
			<div class="namein">
				<h1><?php echo $resuser['name'];?></h1>
			</div>
			<p>
			<a href="index.php"><button class="btn btn-default">返回</button></a>
			<a href="excel.php?uid=<?php echo $resuser['id'];?>"><button class="btn btn-default">导出</button></a>
			</p>
			<p>
			<form action="info.php?id=<?php echo $id;?>" method="post">
			<div class="input-group col-md-3" style="margin-top:0px positon:relative">
				<span class="input-group-btn">
				<input type="text" name="searchcon" class="form-control">
				<input type="submit" name="submit" value="搜索" class="btn btn-info btn-search">
			</span>
			</div>
			</form>
						
		</p>		
		</div>
		<div class="adda">
				
				<p>
				<a href="infoadd.php?id=<?php echo $resuser['id'];?>"><button class="btn btn-primary">添加单个词条</button></a>
				<a href="import.php?id=<?php echo $resuser['id'];?>"><button class="btn btn-primary">批量添加词条</button></a>
				</p>
		</div>
		<?php
		$uid=$resuser['id'];

		if(isset($_POST['searchcon'])){
			$cona=$_POST['searchcon'];
			$sqlresa=mysqli_query($conn,"select * from infor where uid=$uid and phone like  '%$cona%'");
			
		}else if(!isset($_POST['searchcon'])){
			$sqlresa=mysqli_query($conn,"select * from infor where uid=$uid");
		}

		
		while($resusera=mysqli_fetch_array($sqlresa)){
		?>
		<div class="pera">
			<p>中文：<?php echo $resusera['phone'];?></p>
			<p>英文：<?php echo $resusera['address'];?></p>
			<p><a href="infoedit.php?id=<?php echo $resusera['id'];?>">修改</a> | <a href="infodel.php?id=<?php echo $resusera['id'];?>">删除</a></p>
		</div>
		<?php
		}
		?>
	</div>
</body>
</html>