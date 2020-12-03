<?php
session_start();

$target=$_POST['target'];

$conn=mysqli_connect('localhost','root','root','trans');

$sql="insert into translation(target) values('$target')";

mysqli_query($conn,$sql);

mysqli_close($conn);
?>