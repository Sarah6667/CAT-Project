<?php 
include("conn.php");
if(isset($_POST['searchcon'])){
	$cona=$_POST['searchcon'];
	$sql=mysqli_query($conn,"select * from information where name like  '%$cona%' "  );
	
}else if(!isset($_POST['searchcon'])){
	$sql=mysqli_query($conn,"select * from information order by id asc");
}
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
	<div class="inner">
		<div class="a">
			<form action="index.php" method="post">
			<div class="search">
				
				
				<span><input type="text" name="searchcon" class="form-control"></span>
				<span><input type="submit" name="submit" value="搜索" class="btn"></span>
				
			</div>
			</form>
					
		</div>
		<button class="btn btn-default">新建库<a href="add.php"></a></button>
		<?php 
		
		while($res=mysqli_fetch_array($sql)){
		?>
		
		<table class="table">
			<div class="ba">
				<p><a href="info.php?id=<?php echo $res['id'];?>"><?php echo $res['name'];?></a></p>
			</div>
			<div class="but">
				<p><a href="edit.php?id=<?php echo $res['id'];?>">修改</a></p>
			</div>
			<div class="but">
			<p><a href="delete.php?id=<?php echo $res['id'];?>">删除</a></p>
			</div>
		</div>
		<?php
		}
		?>
	</table>
</body>
</html>