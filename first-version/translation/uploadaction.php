<?php
session_start();
if ($_FILES["file"]["error"] > 0)
{
    echo "错误：" . $_FILES["file"]["error"] . "<br>";
}
else
{
	$file_name=$_FILES["file"]["name"];
	$file_type=$_POST["fileselect"];
	$file_size=($_FILES["file"]["size"] / 1024);
	
	
}

$conn=mysqli_connect('localhost','root','root','file');
$sql="insert into fileinfo(filename,filetype,filesize) values('$file_name','$file_type','$file_size')";

$result=mysqli_query($conn,$sql);


$conn1=mysqli_connect('localhost','root','root','trans');

$arr=file($_FILES['file']['tmp_name']);

foreach($arr as $cont){
     mysqli_query($conn1,"insert into translation(filename,source) 
	                         select '$file_name','$cont' from translation			
							 where not exists
							 (select filename from translation where filename='$file_name')");
	 
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf8">
<title>Import Files</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="list-group list-group-horizontal" style="position:relative;left:95px;">
        <a href="#" class="list-group-item active" style="padding:20px 50px;" onclick="location.href='../project/index.php'">Home</a>
        <a href="#" class="list-group-item"style="padding:20px 50px;">About</a>
        <a href="#" class="list-group-item" style="padding:20px 50px;">Contact</li>
		
</div>
<?php 
echo "<a href='txttrans.php'>Go to translate!</a>";
?>