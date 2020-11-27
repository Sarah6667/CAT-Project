<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf8">
<title>Import Files</title>
<style>

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="list-group list-group-horizontal" style="position:relative;left:95px;">
        <a  class="list-group-item active" style="padding:20px 50px;" onclick="location.href='../project/index.php'">Home</a>
        <a  class="list-group-item"style="padding:20px 50px;">About</a>
        <a  class="list-group-item" style="padding:20px 50px;">Contact</li>
		
</div>

<div class="list-group list-group-horizontal" style="position:relative;left:895px;">
     
        <a  class="list-group-item"style="padding:20px 50px;">Machine Translation</a>
        <a  class="list-group-item" style="padding:20px 50px;">Web Search</li>
		
</div>
<?php

$conn=mysqli_connect('localhost','root','root','trans');
if (!$conn) {
    die("Connect failedly" . mysqli_connect_error());
}
$sql="select source from translation";
$res=mysqli_query($conn,$sql);

echo "<form method='post' action='txttrans_submit.php'>
      <table border='1'  class='table table-hover table-light' style='float:center;width: 75%;margin:auto;text-align:center;' cellpadding='10px' cellspacing='0'>
      <tr><th>Source</th><th>Target</th>";
if (mysqli_num_rows($res) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($res)) {
        echo "<tr><td>".$row["source"]."</td><td><input type='text' name='target' style='width:350px;height:50px;'></td></tr>";
    }
} else {
    echo "0 result";
}
echo "</table>
      </form>";
mysqli_close($conn);
?>
</div>
</body>
</html>
