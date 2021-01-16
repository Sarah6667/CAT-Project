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
			<form action="exc.php" method="post" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="hidden" name="uid" value="<?php echo $resuser['id'];?>">
				<input type="submit" value="上传">
			</form>
		</div>
</body>
</html>