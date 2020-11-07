<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>连接数据库</title>
</head>

<body>
<?php
$conn=mysqli_connect("localhost","root","123456","db_mffh")or die("连接数据库服务器失败".mysqli_error());
mysqli_query($conn,"set names utf8");
?>
</body>
</html>