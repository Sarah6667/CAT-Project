<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>Create Project</title>
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
<br>

<div class="btn-group" >
<input type="button" class="btn btn-primary" value="Create Project" id="btn1" >
<input type="button" class="btn btn-primary" value="Select Project" id="btn2" onclick="location.href='selectp.php'">

</div>
<br>
<br>
<div class="container" >
<div class="row">
<div class="col-md-2">
<br>
<br>
<br>
<br>
<br>
<p style="font-size:large;">Creating Project</p>
</div>
<div class="col-md-9" style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">


<div class="row">
<form action="createaction.php" method="post" id="createform" color="green">

<table border="0">

<tr><td>&nbsp;</td></tr>
<div class="col-md-6" style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;"><tr><td>Project Name</td><td><input type="text" class="form-control input-lg" style="width:500px;" id="projectN" name="projectname" required="required"></td></tr></div>
<tr><td>&nbsp;</td></tr>
<div class="col-md-6" style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;"><tr><td>Language Pair</td><td><select class="form-control input-lg" style="width:100px;" name="languagepair"><option value="zh-en">zh-en</option><option value="en-zh">en-zh</option></select></td></tr></div>
<tr><td>&nbsp;</td></tr>
<div class="col-md-6" style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;"><tr><td>Time End</td><td><input class="form-control input-lg" style="width:500px;" type="text" name="timeend" placeholder="pls input the year, month and day with '-', like 2020-12-12"></td></tr></div>
<tr><td>&nbsp;</td></tr>

<div class="col-md-6" style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;" ><tr><td><input type="button" value="Cancel" class="btn btn-default" name="cancel" onclick="location.href='index.php'"></td><td><input class="btn btn-default" type="submit" value="OK" name="ok"></td></tr></div>
<tr><td>&nbsp;</td></tr>

</table>
</form>
</div>
</div>
</div>
</div>
