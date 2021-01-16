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
<div class="container">
<h3><caption>翻译记忆库</caption></h3>
<form class="form-horizontal" role="form" action="index.php" method="post">
			<div class="input-group col-md-3" style="margin-top:0px positon:relative">		
				<span class="input-group-btn">
				<input type="text" name="searchcon" class="form-control"/>
				<input type="submit" name="submit" value="搜索" class="btn btn-info btn-search"/>
				<button class="btn btn-info btn-search" style="margin-left:3px"><a href="add.php">新建</a></button>
			</span>
			</div>
			</form>
		
		<table class="table">

		 <thead>
			<tr>
				 <th>名称</th>
				 <th>操作</th>
			</tr>
		</thead>
		<?php 
		
		while($res=mysqli_fetch_array($sql)){
		?>
		<tbody>
			<tr>
			<td><a href="info.php?id=<?php echo $res['id'];?>"><?php echo $res['name'];?></a></td>
			<td>
			<a href="edit.php?id=<?php echo $res['id'];?>" ><button type="button" class="btn btn-primary" style="margin-right:20px" >修改</button></a>
			<a href="delete.php?id=<?php echo $res['id'];?>"><button type="button" class="btn btn-danger">删除</button></a>
			</td>
			</tr>
   </tbody>
   		<?php
		}
		?>
	</table>
</body>
</html>