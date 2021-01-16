<?php 
include("conn.php");
if(isset($_POST['searchcon'])){
	$cona=$_POST['searchcon'];
	$sql=mysqli_query($conn,"select * from information where name like  '%$cona%' "  );
	
}else if(!isset($_POST['searchcon'])){
	$sql=mysqli_query($conn,"select * from information order by id asc");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
  <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
  <![endif]-->
  <link rel="stylesheet" href="assets/css/ace.min.css" />
  <link rel="stylesheet" href="css/style.css"/>
<title>记忆库管理</title>
</head>

<body>
<div class="page-content">
 <!--入围商家信息管理-->
 <div class="Manager_style">
    <div class="title_name">翻译记忆库信息管理</div>
    <div class="rwxx_xj_btn"><a href="add.php"><button type="button" class="btn btn-primary" id="add_btn_primary">新建</button></a></div>
    <div class="Finalist_style">
     <table id="Finalist_list" class="table table-striped table-bordered table-hover" >
      <thead>
       <tr>
        <th>记忆库名称</th>
        <th>操作</th>
       </tr>
      </thead>
      <tbody>
        <tr>
         <td><a href="info.php?id=<?php echo $res['id'];?>"><?php echo $res['name'];?></a></td>
        <td><button type="button" class="btn btn-info smj_Browse"><a href="edit.php?id=<?php echo $res['id'];?>">修改</a></button><button type="button" class="btn btn-primary"><a href="delete.php?id=<?php echo $res['id'];?>">删除</a></p></button></td>
       </tr>
      </tbody>    
     </table>
    </div>
</div>
<div id="Add_finalists_info" class="" style="display:none">
<div class="page-content">

</body>
</html>
