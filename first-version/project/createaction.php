<?php
session_start();

$projectname=$_POST["projectname"];
$languagepair=$_POST["languagepair"];
$timeend=$_POST["timeend"];



	$conn=mysqli_connect('localhost','root','root','project');
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	echo "连接成功";

	$sql_insert="insert into projectinfo(projectname,languagepair,timeend) values('$projectname','$languagepair','$timeend')";
	if (mysqli_query($conn,$sql_insert)){
		echo "插入成功！";
	}
	else {
		echo "Error:".$sql_insert."<br>".mysqli_error($conn);
	}
		
	
	mysqli_close($conn);




?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>Complete creation</title>
</head>
<body>
<p>Create the project successfully!</p>
<a href="selectp.php">Project displays</a>

</body>
</html>
 


