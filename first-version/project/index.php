<?php
//开启session

if (!isset($_SESSION)){session_start();}

?>
<!DOCTYPE html>

<html>
<head>
  <title>Bootstrap 实例</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style>
	.list-group-horizontal .list-group-item {
		display: inline-block;
	}
	th,td{
	text-align:center;
	
	}
	
</style>
</head>
<body style="background-color:#FFF0F5">


<div class="list-group list-group-horizontal" style="position:relative;left:95px;">
        <a href="#" class="list-group-item active" style="padding:20px 50px;">Home</a>
        <a href="#" class="list-group-item"style="padding:20px 50px;">About</a>
        <a href="#" class="list-group-item" style="padding:20px 50px;">Contact</li>
		
</div>
<div>Hi,<?php echo $_SESSION['user'];?>!</div>
<div>
      <div class="btn-group" style="float:right">
	  <button type="submit" class="btn btn-primary" onclick="location.href='http://localhost/CAT/user/register.php'">Register</button>
	  <button type="submit" class="btn btn-primary" onclick="location.href='http://localhost/CAT/user/login.php'">Log In</button>
	  </div>
      <p class="text-info"><b>Welcome to this website. Hope you will get help.</b></p>
     
</div>
<div class="list-group list-group-horizontal" style="float:center">
        <a href="create.php" class="list-group-item active" style="padding:10px 43px;" >Project management</a>
        <a  class="list-group-item" style="padding:10px 43px;">Term Base</a>
        <a class="list-group-item" style="padding:10px 43px;">Translation Memory</li>
		
</div>
<br/>
<br/>
<table class="table table-hover table-light" style="float:center;width: 90%;margin:auto;" cellpadding="10px" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Source Text</th>
        <th>Target Text</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>翻译是不同语言交流的桥梁。</td>
        <td>Translation serves as the bridge for communication of different languages.</td>
      </tr>
      <tr>
        <td>2</td>
        <td>我们不能忽视翻译和翻译者的意义和作用。</td>
        <td>We cannot overlook the significance and functions of translation and translators.</td>
      </tr>
      <tr>
        <td>3</td>
        <td>让我们手拉手，去促进更多人的交流。</td>
        <td>Let's work together to promote more communication.</td>
      </tr>
    </tbody>
</table>
<br/>
<br/>
<img src="star.gif" alt="star" title="star"/>
</body>
</html>

