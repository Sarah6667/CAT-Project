<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>Select Project</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="list-group list-group-horizontal" style="position:relative;left:95px;">
        <a  class="list-group-item active" style="padding:20px 50px;" onclick="location.href='index.php'">Home</a>
        <a  class="list-group-item"style="padding:20px 50px;">About</a>
        <a  class="list-group-item" style="padding:20px 50px;">Contact</li>
		
</div>

<table class="table table-striped">
  
  <thead>
    <tr>
      <th>ID</th>
      <th>Project</th>
      <th>Options</th>
	  <th>Progress</th>
	  
    </tr>
  </thead>
  <tbody>
    <?php
	$conn=mysqli_connect('localhost','root','root','project');

$sql_select="select * from projectinfo"; 
$result=mysqli_query($conn,$sql_select);
	if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>". $row["id"]. "</td><td>". $row["projectname"]. "|" . $row["languagepair"]. "|".$row["timeend"]."</td><td>"."<a href='../translation/upload.php'>Import</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='translate.php'>Translate</a>"."</td></tr>";
    }
   }  
   else {
    echo "<tr><td>".'No Result!'."</td></tr>";
}
	?>
    
</tbody>
</table>

</body>
</html>