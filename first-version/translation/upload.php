<?php

session_start();
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
        <a  class="list-group-item active" style="padding:20px 50px;" onclick="location.href='../project/index.php'">Home</a>
        <a  class="list-group-item"style="padding:20px 50px;">About</a>
        <a  class="list-group-item" style="padding:20px 50px;">Contact</li>
		
</div>

<form class="form-inline" role="form" action="uploadaction.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="sr-only" for="file">File Name</label>
    
  </div>
  <div class="form-group">
    <label class="sr-only" for="inputfile">Import File</label>
    <input type="file" id="file" name="file">
  </div>
  <div class="select">
    <label>
	<select name="fileselect">
      <option>Word</option>
	  <option>Excel</option>
	  <option>TXT</option>
	 </select>
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


</body>
</html>